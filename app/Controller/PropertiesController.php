<?php

App::uses('AppController', 'Controller');

/**
 * Properties Controller
 *
 * @property Property $Property
 */
class PropertiesController extends AppController {

    public $uses = array('User', 'Activity', 'Property', 'PropertyActivity', 'PropertyMiscellaneousItem', 'PropertyPaymentType', 'PropertyPhoto', 'PropertyRate', 'PropertyReservation', 'PropertyReview');

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

    public function choose_your_listings($params = null) {
        if ($params) {
            
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

    public function address($params = null) {
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

                $this->Session->write('property_address', $property_data);
                $this->redirect(array('action' => 'description'));
            }
        } else {
            $this->redirect(array('action' => 'choose_your_listings'));
        }
    }

    public function description($params = null) {
        $this->set('activities', $this->Activity->find('all'));

        $property_address = $this->Session->read('property_address');

        if ($this->request->is('post')) {

            $property_desc = array('title' => $this->request->data['Property']['title'],
                'description' => $this->request->data['Property']['description'],
                'bedrooms' => $this->request->data['Property']['bedrooms'],
                'bathrooms' => $this->request->data['Property']['bathrooms'],
            );

            $this->Session->write('property_desc', $property_desc);

            //save activities here
            $actcount = 1;
            foreach ($this->request->data['Property']['activity'] as $val) {
                $actdata = array(
                    'actname' . $actcount => $val
                );
                $actcount++;
                $actallvalue[] = $actdata;
            }

            $this->Session->write('property_activity', $actallvalue);
            $this->redirect(array('action' => 'rate'));
        }
        $property_desc = $this->Session->read('property_desc');
        $property_activity = $this->Session->read('property_activity');
    }

    public function rate($params = null) {
        $property_address = $this->Session->read('property_address');
        $property_desc = $this->Session->read('property_desc');
        $property_activity = $this->Session->read('property_activity');

        if ($this->request->is('post')) {
            $prate = array('rate' => $this->request->data['Property']['rate']
            );

            $this->Session->write('property_rate', $prate);
            $this->redirect(array('action' => 'rate'));
        }
    }

    public function preview() {
        $this->layout = "property_preview";
        $property_address = $this->Session->read('property_address');
        $property_desc = $this->Session->read('property_desc');
        $property_activity = $this->Session->read('property_activity');
        $property_activity = $this->Session->read('property_rate');
    }

    public function destroy() {
        $this->Session->destroy('property_address');
        $this->Session->destroy('property_desc');
    }
    
    /* start of daisy's implementation*/
    public function rates() {
        //dummy data
        $this->Session->write('Property', array(
            'package_id' => '1',
            'address1' => 'address1',
            'address2' => 'address2',
            'city' => 'city',
            'state' => 'state',
            'province' => 'province',
            'title' => 'title',
            'description' => 'description',
            'bedrooms' => 1,
            'bathrooms' => 1,
            'rate' => 5,
            'activities' => array(1, 2, 3, 4),
            'payment_types' => array(1, 2),
            'miscellaneous' => array(1)
        ));

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
        }
        $this->set('seasons', $seasons);
    }

    public function upload_photos() {
        $this->Session->write('Property', array(
            'package_id' => '1',
            'address1' => 'address1',
            'address2' => 'address2',
            'city' => 'city',
            'state' => 'state',
            'province' => 'province',
            'title' => 'title',
            'description' => 'description',
            'bedrooms' => 1,
            'bathrooms' => 1,
            'rate' => 5,
            'activities' => array(1, 2, 3, 4),
            'payment_types' => array(1, 2),
            'miscellaneous' => array(1)
        ));
        $packageID = $this->Session->read('Property.package_id');
        $this->loadModel('Package');
        $packageData = $this->Package->read(array('photo_limit'), $packageID);
        $photoLimit = $packageData['Package']['photo_limit'];
//        var_dump($this->request->data);
        if ($this->request->is('post')) {
//            echo 'test';
            echo '<pre>';
            var_dump($this->request->data);
            echo '</pre>';
//            $photoArray = array();
//            $photos = $this->request->data;
//            $validPhotos = 0;
//            foreach ($photos as $photo) {
////                $this->QuestionsOption->create();
////                $point++;
////                $optionData = array('question_id' => $this->Question->getLastInsertId(), 'name' => $option, 'points' => $point);
//                if ($photo && ($validPhotos<$photoLimit-1)) {
////                    $photoArray[] = 
//                    $this->Session->write('Property.rates', $rates);
//                    $validPhotos++;
//                }
//                $cnt++;
//            }
        }
        
        $this->set('photo_limit', $photoLimit);
    }
    
    /* end of daisy's implementation*/

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
