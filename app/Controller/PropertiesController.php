<?php

App::uses('AppController', 'Controller');
App::uses('AttachmentBehavior', 'Uploader.Model/Behavior');

/**
 * Properties Controller
 *
 * @property Property $Property
 */
class PropertiesController extends AppController {

    public $uses = array('User', 'Activity', 'Property', 'PropertyActivity', 'PropertyMiscellaneousItem', 'PropertyPaymentType', 'PropertyPhoto', 'PropertyRate', 'Reservation', 'PropertyReview');

    public function beforeFilter() {
        $this->Auth->allow();
        $this->layout = "property";
    }

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Property->recursive = 0;
        $this->set('properties', $this->paginate());
    }

    public function choose_your_listings($params = null) { //1st step
        if ($params) {
            
        }
    }

    public function address($params = null) { //2nd step
        $listingType = 'rent'; //default
        if ($params || $this->request->is('post')) {
            $this->set('package', $params);
            if ($this->request->is('post')) {

                $property_data = array('package' => $this->request->data['Property']['package'],
                    'address1' => $this->request->data['Property']['address1'],
                    'address2' => $this->request->data['Property']['address2'],
                    'city' => $this->request->data['Property']['city'],
                    'state' => $this->request->data['Property']['state'],
                    'province' => $this->request->data['Property']['province'],
                    'zip' => $this->request->data['Property']['zip'],);

                $this->Session->write('Property.property_address', $property_data);
                $this->redirect(array('action' => 'description'));
            } else {
                $listingTypeExp = explode('-', $params);
                $listingType = isset($listingTypeExp[1]) ? $listingTypeExp[1] : 'rent';
                $listingPackage = isset($listingTypeExp[2]) && ($listingTypeExp[2] == 'standard' || $listingTypeExp[2] == 'premium') ? $listingTypeExp[2] : 'premium plus';
                $this->loadModel('Package');
                $package = $this->Package->find('first', array('conditions' => array('Package.name' => $listingPackage), 'fields' => array('Package.id')));
                $this->Session->write('Property.package_id', $package['Package']['id']);
                $this->Session->write('Property.listing_type', $listingType);
            }
        } else {
            $this->redirect(array('action' => 'choose_your_listings'));
        }
    }

    public function description($params = null) { //3rd step
        $this->set('activities', $this->Activity->find('all'));

        if ($this->request->is('post')) {

            $property_desc = array('title' => $this->request->data['Property']['title'],
                'description' => $this->request->data['Property']['description'],
                'bedrooms' => $this->request->data['Property']['bedrooms'],
                'bathrooms' => $this->request->data['Property']['bathrooms'],
            );

            $this->Session->write('Property.property_desc', $property_desc);

            //save activities here
            foreach ($this->request->data['Property']['activity'] as $val) {
                $actallvalue[] = $val;
            }

            $this->Session->write('Property.activities', $actallvalue);
            if ($this->Session->read('Property.listing_type') == 'rent') {
                $this->redirect(array('action' => 'rates'));
            } else {
                $this->redirect(array('action' => 'rate'));
            }
        }
        $property_desc = $this->Session->read('Property.property_desc');
    }

    public function rates() { //4th step if rent
        $this->loadModel('Season');
        $seasons = $this->Season->find('list', array('conditions' => array('is_active' => 1)));
        if ($this->request->is('post')) {
            $rates = array();
            $rateData = $this->request->data['Property'];
            foreach ($seasons as $key => $season) {
                $rates[$key] = array(
                    'from' => isset($rateData['from_' . $key]) ? $rateData['from_' . $key] : 0,
                    'to' => isset($rateData['to_' . $key]) ? $rateData['to_' . $key] : 0,
                    'night_rate' => isset($rateData['night_rate_' . $key]) ? $rateData['night_rate_' . $key] : 0,
                    'week_rate' => isset($rateData['week_rate_' . $key]) ? $rateData['week_rate_' . $key] : 0,
                    'month_rate' => isset($rateData['month_rate_' . $key]) ? $rateData['month_rate_' . $key] : 0
                );
            }
            $this->Session->write('Property.rates', $rates);
            $this->Session->write('Property.additional_information', isset($rateData['additional_information']) ? $rateData['additional_information'] : '');
            $this->redirect(array('action' => 'upload_photos'));
        }
        $this->set('seasons', $seasons);
    }

    public function rate($params = null) { //4th step if sale
        $property_address = $this->Session->read('Property.property_address');
        $property_desc = $this->Session->read('Property.property_desc');
        $property_activity = $this->Session->read('Property.property_activity');

        if ($this->request->is('post')) {
            $prate = array('rate' => $this->request->data['Property']['rate']
            );

            $this->Session->write('Property.rate', $prate);
            $this->redirect(array('action' => 'upload_photos'));
        }
    }

    public function upload_photos() { //5th step
        $packageID = $this->Session->read('Property.package_id');
        $this->loadModel('Package');
        $packageData = $this->Package->read(array('photo_limit', 'is_audio_enabled'), $packageID);
        $photoLimit = $packageData['Package']['photo_limit'];

        if ($this->request->is('post')) {
            $photoArray = array();
            $photos = $this->request->data['photo'];
            $validPhotos = 0;
            $this->loadModel('TmpUpload');
            foreach ($photos as $photo) {
                $this->TmpUpload->create();
                if ($photo && ($validPhotos < $photoLimit - 1)) {
                    if ($this->TmpUpload->save(array('session_id' => $this->Session->id(), 'tag' => 'property_photo', 'path' => $photo))) {
                        $photoArray[] = $photo;
                        $validPhotos++;
                    }
                }
            }
            $this->Session->write('Property.photos', $photoArray);
            if ($packageData['Package']['is_audio_enabled']) {
                $this->redirect(array('action' => 'upload_audio'));
            } else {
                $this->redirect(array('action' => 'video_url'));
            }
        }

        $this->set('photo_limit', $photoLimit);
    }

    public function upload_audio() { //6th step
        $packageID = $this->Session->read('Property.package_id');
        $this->loadModel('Package');
        $packageData = $this->Package->read(array('is_audio_enabled', 'is_video_enabled'), $packageID);
        if ($packageData['Package']['is_audio_enabled']) {
            if ($this->request->is('post')) {
                $audio = $this->request->data['Properties']['audio'];
                $this->loadModel('TmpUpload');
                $this->TmpUpload->create();
                if ($this->TmpUpload->save(array('session_id' => $this->Session->id(), 'tag' => 'property_audio', 'path' => $audio))) {
                    $this->Session->write('Property.audio', $audio);
                    $this->redirect(array('action' => 'video_url'));
                }
            }
        } else {
            $this->redirect(array('action' => 'video_url'));
        }
    }

    public function video_url() { //7th step
        $packageID = $this->Session->read('Property.package_id');
        $this->loadModel('Package');
        $packageData = $this->Package->read(array('is_audio_enabled', 'is_video_enabled'), $packageID);
        $property_listing = $this->Session->read('Property.listing_type');
        if ($packageData['Package']['is_video_enabled']) {
            if ($this->request->is('post')) {
                $video = $this->request->data['Properties']['video'];
                $this->Session->write('Property.video', $video);
                if ($property_listing == 'rent') {
                    $this->redirect(array('action' => 'availability_calendar'));
                } else {
                    $this->redirect(array('action' => 'preview'));
                }
            }
        } else {
            if ($property_listing == 'rent') {
                $this->redirect(array('action' => 'availability_calendar'));
            } else {
                $this->redirect(array('action' => 'preview'));
            }
        }
    }

    public function availability_calendar() { //8th step if rent
        if ($this->request->is('post')) {
            $dates = explode(',', $this->request->data['dates']);
            $this->Session->write('Property.reservation_dates', $dates);
            $this->redirect(array('action' => 'preview'));
        }
    }

    public function preview($params = null) { //preview the listing, the final step
        $this->layout = "property_preview";
        $this->set('activities', $this->Activity->find('all', array('conditions' => array('Activity.id' => $this->Session->read('Property.activities')))));
        $this->set('property', $this->Session->read('Property'));
    }

    public function save_property() {
//        echo '<pre>';
//        var_dump($this->Auth->user('user_id'));
//        echo '</pre>';
        if ($this->request->is('post')) {
            $propertySess = $this->Session->read('Property');
            $property = array(
                'user_id'=>$this->Auth->user('user_id'),
                'address1'=>$propertySess['property_address']['address1'],
                'address2'=>$propertySess['property_address']['address2'],
                'city'=>$propertySess['property_address']['city'],
                'zip'=>$propertySess['property_address']['zip'],
                'state'=>$propertySess['property_address']['state'],
                'province'=>$propertySess['property_address']['province'],
                'title'=>$propertySess['property_desc']['title'],
                'description'=>$propertySess['property_desc']['description'],
                'bedrooms'=>$propertySess['property_desc']['bedrooms'],
                'bathrooms'=>$propertySess['property_desc']['bathrooms'],
                'rate'=>isset($propertySess['rate'])?$propertySess['rate']:'',
                'video'=>isset($propertySess['video'])?$propertySess['video']:'',
                'audio'=>isset($propertySess['audio'])?'files/uploads/properties/'.$propertySess['audio']:'',
                'package_id'=>$propertySess['package_id'],
                'additional_information'=>isset($propertySess['additional_information'])?$propertySess['additional_information']:'',
                'listing_type'=>$propertySess['listing_type']
            );
            $this->Property->create();
            if($this->Property->save($property)){
                //activities
                if(isset($propertySess['activities'])){
                    foreach($propertySess['activities'] as $act){    
                        $this->PropertyActivity->create();
                        if($this->PropertyActivity->save(array('property_id'=>$this->Property->getLastInsertID(), 'activity_id'=>$act))){
                            echo 'success - activity<br /></br />';
                        }else{
                            var_dump($this->PropertyActivity->validationErrors);
                            echo 'failed - activity<br /></br />';
                        }
                    }
                }
                //photos
                if(isset($propertySess['photos'])){
                    foreach($propertySess['photos'] as $photo){  
                        $this->PropertyPhoto->create();
                        if($this->PropertyPhoto->save(array('property_id'=>$this->Property->getLastInsertID(), 'photo'=>'files/uploads/properties/'.$photo['name']))){
                            echo 'success - photo<br /></br />';
                        }else{
                            var_dump($this->PropertyPhoto->validationErrors);
                            echo 'failed - photo<br /></br />';
                        }
                    }
                }
                //reservations
                if(isset($propertySess['reservation_dates'])){
                    foreach($propertySess['reservation_dates'] as $res){  
                        $this->Reservation->create();
                        if($this->Reservation->save(array('property_id'=>$this->Property->getLastInsertID(), 'date'=>date("Y-m-d", strtotime($res) )))){
                            echo 'success - reservation<br /></br />';
                        }else{
                            var_dump($this->Reservation->validationErrors);
                            echo 'failed - reservation<br /></br />';
                        }
                    }
                }
                //if rent -> rates
                if(isset($propertySess['rates'])){
                    foreach($propertySess['rates'] as $key=>$rate){  
                        $this->PropertyRate->create();
                        $rateData = array(
                            'property_id'=>$this->Property->getLastInsertID(),
                            'season_id'=>$key,
                            'from'=>$rate['from'],
                            'to'=>$rate['to'],
                            'night_rate'=>$rate['night_rate']?$rate['night_rate']:'',
                            'week_rate'=>$rate['week_rate']?$rate['week_rate']:'',
                            'month_rate'=>$rate['month_rate']?$rate['month_rate']:'',
                            );
                        if($this->PropertyRate->save($rateData)){
                            echo 'success - PropertyRate<br /></br />';
                        }else{
                            var_dump($this->PropertyRate->validationErrors);
                            echo 'failed - PropertyRate<br /></br />';
                        }
                    }
                }
                //if sale -> rate
                if(isset($propertySess['rate'])){
                        $this->PropertyRate->create();
                        if($this->PropertyRate->save(array(
                            'property_id'=>$this->Property->getLastInsertID(),
                            'price'=>$propertySess['rate']
                            ))){
                            echo 'success - PropertyRate<br /></br />';
                        }else{
                            var_dump($this->PropertyRate->validationErrors);
                            echo 'failed - PropertyRate<br /></br />';
                        }
                }
                
                echo 'success';
            }else{
                var_dump($this->Property->validationErrors);
                echo 'failed';
            }
//            $video = $this->request->data['Properties']['video'];
//            $this->Session->write('Property.video', $video);
//            if ($property_listing == 'rent') {
//                $this->redirect(array('action' => 'availability_calendar'));
//            } else {
//                $this->redirect(array('action' => 'preview'));
//            }
            $this->autoRender = false;
        }
    }

    public function rent($params = null) {
        
    }

    public function sell($params = null) {
        $this->set('type', $params);
    }

    public function price() {
        $this->Property->recursive = 0;
        $this->set('properties', $this->paginate());
    }

    public function destroy() {
        $this->Session->destroy('property_address');
        $this->Session->destroy('property_desc');
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Property->id = $id;
        if (!$this->Property->exists()) {
            throw new NotFoundException(__('Invalid property'));
        }
        $this->set('property', $this->Property->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Property->create();
            if ($this->Property->save($this->request->data)) {
                $this->Session->setFlash(__('The property has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The property could not be saved. Please, try again.'));
            }
        }
        $cities = $this->Property->City->find('list');
        $this->set(compact('cities'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->Property->id = $id;
        if (!$this->Property->exists()) {
            throw new NotFoundException(__('Invalid property'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Property->save($this->request->data)) {
                $this->Session->setFlash(__('The property has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The property could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Property->read(null, $id);
        }
        $cities = $this->Property->City->find('list');
        $this->set(compact('cities'));
    }

    /**
     * delete method
     *
     * @throws MethodNotAllowedException
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->Property->id = $id;
        if (!$this->Property->exists()) {
            throw new NotFoundException(__('Invalid property'));
        }
        if ($this->Property->delete()) {
            $this->Session->setFlash(__('Property deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Property was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

}
