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
        $this->Auth->allow(array('index', 'rent_a_property', 'buy_a_property', 'search', 'disp_property_list', 'view', 'contact_owner', 'display_contact_element'));
        $this->layout = "property";
    }

    /**
     * index method
     *
     * @return void
     */
    public function index($type = null) {
        $this->loadModel('Review');
        if ($type) {
            $properties = $this->Property->find('all', array(
                'conditions' => array('Property.is_active' => 1, 'Property.listing_type' => $type),
                'fields' => array('Property.title', 'Property.rate', 'Property.id', 'Property.listing_type'),
                    ));
        } else {
            $properties = $this->Property->find('all', array(
                'conditions' => array('Property.is_active' => 1, 'Property.listing_type' => 'rent'),
                'fields' => array('Property.title', 'Property.rate', 'Property.id', 'Property.listing_type'),
                    ));
        }

        foreach ($properties as $k => $p) {
            $properties[$k]['photo'] = $this->PropertyPhoto->find('first', array('conditions' => array('PropertyPhoto.property_id' => $p['Property']['id']), 'fields' => array('PropertyPhoto.photo')));
            $rates = $this->PropertyRate->find('first', array('conditions' => array('PropertyRate.property_id' => $p['Property']['id']), 'fields' => array('PropertyRate.night_rate', 'PropertyRate.week_rate', 'PropertyRate.price')));
            $avgRating = $this->Review->find('all', array('conditions' => array('Review.property_id' => $p['Property']['id']), 'fields' => array('AVG(Review.rate) as avg')));
            $this->loadModel('PropertyPaymentType');
            $properties[$k]['payment_type'] = $this->PropertyPaymentType->find('count', array('conditions' => array('PropertyPaymentType.property_id' => $p['Property']['id'])));
            $this->loadModel('PropertyMiscellaneousItem');
            $properties[$k]['handicap_accessibility'] = $this->PropertyMiscellaneousItem->find('count', array('conditions' => array('PropertyMiscellaneousItem.property_id' => $p['Property']['id'], 'PropertyMiscellaneousItem.miscellaneous_item_id' => 1)));
            $properties[$k]['pet_friendly'] = $this->PropertyMiscellaneousItem->find('count', array('conditions' => array('PropertyMiscellaneousItem.property_id' => $p['Property']['id'], 'PropertyMiscellaneousItem.miscellaneous_item_id' => 2)));
            $properties[$k]['rates'] = $rates;
            $properties[$k]['price'] = $rates['PropertyRate']['price'];
            $properties[$k]['star_rating'] = $avgRating[0][0]['avg'] ? $avgRating[0][0]['avg'] : 0;
        }
        $price = array();
        foreach ($properties as $key => $row) {
            $price[$key] = $row['price'];
        }
        array_multisort($price, SORT_ASC, $properties);
        $this->set('property_type', isset($properties[0]['Property']['listing_type']) ? $properties[0]['Property']['listing_type'] : 'rent');
        $this->set('properties', $properties);
    }

    public function rent_a_property() {

        $this->set('properties', $this->get_properties("rent"));
        $this->set('property_type', 'rent');
        $this->render('properties');
    }

    public function buy_a_property() {
        $this->set('properties', $this->get_properties("sale"));
        $this->set('property_type', 'sale');
        $this->render('properties');
    }

    private function get_properties($type = "rent") {
        $this->loadModel('Review');
        $params = array('Property.is_active' => 1, 'Property.is_deleted' => 0, 'Property.listing_type' => $type);
        if (isset($this->request->query['destination'])) {
            $dest = $this->request->query['destination'];
            $params['OR'] = array(
                'Property.address1 LIKE' => "%$dest%",
                'Property.address2 LIKE' => "%$dest%",
                'Property.city LIKE' => "%$dest%",
                'Property.state LIKE' => "%$dest%"
            );
        }
        if (isset($this->request->query['bedrooms'])) {
            $params['Property.bedrooms'] = $this->request->query['bedrooms'];
        }
        $properties = $this->Property->find('all', array(
            'conditions' => $params,
            'fields' => array('Property.title', 'Property.rate', 'Property.id', 'Property.listing_type'),
                ));

        foreach ($properties as $k => $p) {
            $properties[$k]['photo'] = $this->PropertyPhoto->find('first', array('conditions' => array('PropertyPhoto.property_id' => $p['Property']['id']), 'fields' => array('PropertyPhoto.photo')));
            $rates = $this->PropertyRate->find('first', array('conditions' => array('PropertyRate.property_id' => $p['Property']['id']), 'fields' => array('PropertyRate.price', 'PropertyRate.night_rate', 'PropertyRate.week_rate')));
            $avgRating = $this->Review->find('all', array('conditions' => array('Review.property_id' => $p['Property']['id']), 'fields' => array('AVG(Review.rate) as avg')));
            $this->loadModel('PropertyPaymentType');
            $properties[$k]['payment_type'] = $this->PropertyPaymentType->find('count', array('conditions' => array('PropertyPaymentType.property_id' => $p['Property']['id'])));
            $this->loadModel('PropertyMiscellaneousItem');
            $properties[$k]['handicap_accessibility'] = $this->PropertyMiscellaneousItem->find('count', array('conditions' => array('PropertyMiscellaneousItem.property_id' => $p['Property']['id'], 'PropertyMiscellaneousItem.miscellaneous_item_id' => 1)));
            $properties[$k]['pet_friendly'] = $this->PropertyMiscellaneousItem->find('count', array('conditions' => array('PropertyMiscellaneousItem.property_id' => $p['Property']['id'], 'PropertyMiscellaneousItem.miscellaneous_item_id' => 2)));
            $properties[$k]['rates'] = $rates;
            $properties[$k]['price'] = $type == 'rent' ? $rates['PropertyRate']['night_rate'] : $rates['PropertyRate']['price'];
            $properties[$k]['star_rating'] = $avgRating[0][0]['avg'] ? $avgRating[0][0]['avg'] : 0;
        }
        $price = array();
        foreach ($properties as $key => $row) {
            $price[$key] = $row['price'];
        }
        array_multisort($price, SORT_ASC, $properties);
        return $properties;
    }

    public function search($type = null) {
        $render = 'properties';
        if ($this->request->is('get')) {
            $contain = array();
            $params = array('Property.is_active' => 1, 'Property.is_deleted' => 0, 'Property.listing_type' => isset($this->request->query['type']) && $this->request->query['type'] == 'sale' ? 'sale' : 'rent');

            if (isset($this->request->query['mxvrno']) && $this->request->query['mxvrno']) {
                $params['Property.id'] = $this->request->query['mxvrno'];
            } else {
                if (!isset($this->request->query['type']) || (isset($this->request->query['type']) && $this->request->query['type'] == 'rent')) {
                    if ((isset($this->request->query['datefrom']) && isset($this->request->query['dateto']) &&
                            $this->request->query['datefrom'] && $this->request->query['dateto'])) {
                        $contain = array(
                            'Reservation' => array(
                                'conditions' => array(
                                    'Reservation.date >= ' => date("Y-m-d", strtotime($this->request->query['datefrom'])),
                                    'Reservation.date <= ' => date("Y-m-d", strtotime($this->request->query['dateto']))
                                )
                            )
                        );
                    }
                }
                if (isset($this->request->query['bedrooms']) && $this->request->query['bedrooms']) {
                    $params['Property.bedrooms'] = $this->request->query['bedrooms'];
                }
                if (isset($this->request->query['destination']) && $this->request->query['destination']) {
                    $dest = $this->request->query['destination'];
                    $params['OR'] = array(
                        'Property.address1 LIKE' => "%$dest%",
                        'Property.address2 LIKE' => "%$dest%",
                        'Property.city LIKE' => "%$dest%",
                        'Property.state LIKE' => "%$dest%"
                    );
                }
            }

            $this->loadModel('Review');

            $properties = $this->Property->find('all', array(
                'conditions' => $params,
                'fields' => array('Property.title', 'Property.rate', 'Property.id', 'Property.listing_type'),
                'contain' => $contain
                    ));
            foreach ($properties as $k => $p) {
                $properties[$k]['photo'] = $this->PropertyPhoto->find('first', array('conditions' => array('PropertyPhoto.property_id' => $p['Property']['id']), 'fields' => array('PropertyPhoto.photo')));
                $rates = $this->PropertyRate->find('first', array('conditions' => array('PropertyRate.property_id' => $p['Property']['id']), 'fields' => array('PropertyRate.night_rate', 'PropertyRate.week_rate', 'PropertyRate.price')));
                $avgRating = $this->Review->find('all', array('conditions' => array('Review.property_id' => $p['Property']['id']), 'fields' => array('AVG(Review.rate) as avg')));
                $properties[$k]['rates'] = $rates;
                $properties[$k]['price'] = $p['Property']['listing_type'] == 'sale' ? $rates['PropertyRate']['price'] : $rates['PropertyRate']['night_rate'];
                $properties[$k]['star_rating'] = $avgRating[0][0]['avg'] ? $avgRating[0][0]['avg'] : 0;
            }
            $price = array();

            $filteredProperties = array();

            //check if dates are available
            foreach ($properties as $key => $row) {
                if (isset($row['Reservation'])) {
                    if (!sizeof($row['Reservation'])) {
                        $filteredProperties[] = $row;
                    }
                } else {
                    $filteredProperties[] = $row;
                }
            }

            foreach ($filteredProperties as $key => $row) {
                $price[$key] = $row['price'];
            }

            array_multisort($price, SORT_ASC, $filteredProperties);
            $this->set('property_type', isset($filteredProperties[0]['Property']['listing_type']) ? $filteredProperties[0]['Property']['listing_type'] : 'rent');
            $this->set('properties', $filteredProperties);
            $this->render($render);
        }
    }

    public function disp_property_list() {
        if ($this->request->is('post')) {
            $this->loadModel('Review');
            $type = isset($this->request->data['type']) && $this->request->data['type'] == 'sale' ? 'sale' : 'rent';
            $sort = isset($this->request->data['sort']) && $this->request->data['sort'] == 'star_rating' ? 'star_rating' : 'price';
            $order = isset($this->request->data['order']) && $this->request->data['order'] == 'desc' ? 'desc' : 'asc';

            $properties = $this->Property->find('all', array(
                'conditions' => array('Property.is_active' => 1, 'Property.is_deleted' => 0, 'Property.listing_type' => $type),
                'fields' => array('Property.title', 'Property.rate', 'Property.id', 'Property.listing_type'),
                    ));
            foreach ($properties as $k => $p) {
                $properties[$k]['photo'] = $this->PropertyPhoto->find('first', array('conditions' => array('PropertyPhoto.property_id' => $p['Property']['id']), 'fields' => array('PropertyPhoto.photo')));
                $rates = $this->PropertyRate->find('first', array('conditions' => array('PropertyRate.property_id' => $p['Property']['id']), 'fields' => array('PropertyRate.night_rate', 'PropertyRate.week_rate', 'PropertyRate.price')));
                $avgRating = $this->Review->find('all', array('conditions' => array('Review.property_id' => $p['Property']['id']), 'fields' => array('AVG(Review.rate) as avg')));
                $properties[$k]['rates'] = $rates;
                $properties[$k]['price'] = $type == 'sale' ? $rates['PropertyRate']['price'] : $rates['PropertyRate']['night_rate'];
                $properties[$k]['star_rating'] = $avgRating[0][0]['avg'] ? $avgRating[0][0]['avg'] : 0;
                $this->loadModel('PropertyPaymentType');
                $properties[$k]['payment_type'] = $this->PropertyPaymentType->find('count', array('conditions' => array('PropertyPaymentType.property_id' => $p['Property']['id'])));
                $this->loadModel('PropertyMiscellaneousItem');
                $properties[$k]['handicap_accessibility'] = $this->PropertyMiscellaneousItem->find('count', array('conditions' => array('PropertyMiscellaneousItem.property_id' => $p['Property']['id'], 'PropertyMiscellaneousItem.miscellaneous_item_id' => 1)));
                $properties[$k]['pet_friendly'] = $this->PropertyMiscellaneousItem->find('count', array('conditions' => array('PropertyMiscellaneousItem.property_id' => $p['Property']['id'], 'PropertyMiscellaneousItem.miscellaneous_item_id' => 2)));
            }
            if ($sort == 'price') {
                $price = array();
                foreach ($properties as $key => $row) {
                    $price[$key] = $row['price'];
                }
                if ($order == 'asc') {
                    array_multisort($price, SORT_ASC, $properties);
                } else {
                    array_multisort($price, SORT_DESC, $properties);
                }
            } else {
                $star = array();
                foreach ($properties as $key => $row) {
                    $star[$key] = $row['star_rating'];
                }
                if ($order == 'desc') {
                    array_multisort($star, SORT_DESC, $properties);
                } else {
                    array_multisort($star, SORT_ASC, $properties);
                }
            }
            $this->set('property_type', $type);

            $this->set('properties', $properties);

            if ($this->request->is('ajax')) {
                $this->layout = 'ajax';
                $this->render('/Elements/property_list');
            }
        }
    }

    public function choose_your_listings($params = null) { //1st step
        $this->set('authUser', $this->Auth->user());
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
            $this->Session->write('Property.param_listing_type', $params);
        } else {
            $this->redirect(array('action' => 'choose_your_listings'));
        }
        $this->set('sess_address', $this->Session->read('Property.property_address'));
    }

    public function description($preview = null) { //3rd step
        if ($this->request->is('post')) {

            $property_desc = array('title' => $this->request->data['Property']['title'],
                'description' => $this->request->data['Property']['description'],
                'bedrooms' => $this->request->data['Property']['bedrooms'],
                'bathrooms' => $this->request->data['Property']['bathrooms'],
                'rate' => $this->request->data['Property']['rate'],
            );

            $this->Session->write('Property.property_desc', $property_desc);

            //saving of activities
            $actallvalue = array();
            if (isset($this->request->data['Property']['activity'])) {
                foreach ($this->request->data['Property']['activity'] as $val) {
                    $actallvalue[] = $val;
                }
            }
            $this->Session->write('Property.activities', $actallvalue);

            //saving of payment types
            $payallvalue = array();
            if (isset($this->request->data['Property']['payment_type'])) {
                foreach ($this->request->data['Property']['payment_type'] as $val) {
                    $payallvalue[] = $val;
                }
            }
            $this->Session->write('Property.payment_types', $payallvalue);

            //saving of miscellaneous items
            $misallvalue = array();
            if (isset($this->request->data['Property']['miscellaneous_item'])) {
                foreach ($this->request->data['Property']['miscellaneous_item'] as $val) {
                    $misallvalue[] = $val;
                }
            }
            $this->Session->write('Property.miscellaneous_items', $misallvalue);


            if ($this->Session->read('Property.listing_type') == 'rent') {
                if ($preview) {
                    $this->redirect(array('action' => 'rates/1'));
                } else {
                    $this->redirect(array('action' => 'rates'));
                }
            } else {
                if ($preview) {
                    $this->redirect(array('action' => 'rate/1'));
                } else {
                    $this->redirect(array('action' => 'rate'));
                }
            }
        }
        $property_desc = $this->Session->read('Property.property_desc');
        $this->set('activities', $this->Activity->find('all'));
        $this->loadModel('PaymentType');
        $this->set('payment_types', $this->PaymentType->find('all'));
        $this->loadModel('MiscellaneousItem');
        $this->set('miscellaneous_items', $this->MiscellaneousItem->find('all'));
        $this->set('sess_listing_type', $this->Session->read('Property.listing_type'));
        $this->set('sess_param_listing_type', $this->Session->read('Property.param_listing_type'));
        $this->set('sess_desc', $property_desc);
        $this->set('sess_activities', $this->Session->read('Property.activities'));
        $this->set('sess_payment_types', $this->Session->read('Property.payment_types'));
        $this->set('sess_miscellaneous_items', $this->Session->read('Property.miscellaneous_items'));
        $this->set('preview', $preview);
    }

    public function rates($preview = null) { //4th step if rent
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
            if ($preview) {
                $this->redirect(array('action' => 'availability_calendar/1'));
            } else {
                $this->redirect(array('action' => 'upload_photos'));
            }
        }
        $this->set('sess_rates', $this->Session->read('Property.rates'));
        $this->set('sess_additional_information', $this->Session->read('Property.additional_information'));
        $this->set('seasons', $seasons);
        $this->set('preview', $preview);
    }

    public function rate($preview = null) { //4th step if sale
        $property_address = $this->Session->read('Property.property_address');
        $property_desc = $this->Session->read('Property.property_desc');
        $property_activity = $this->Session->read('Property.property_activity');

        if ($this->request->is('post')) {
            $prate = $this->request->data['Property']['rate'];

            $this->Session->write('Property.rate', $prate);
            if ($preview) {
                $this->redirect(array('action' => 'availability_calendar/1'));
            } else {
                $this->redirect(array('action' => 'upload_photos'));
            }
        }
        $this->set('sess_rate', $this->Session->read('Property.rate'));
        $this->set('preview', $preview);
    }

    public function upload_photos($preview = null) { //5th step
        $packageID = $this->Session->read('Property.package_id');
        $this->loadModel('Package');
        $packageData = $this->Package->read(array('photo_limit', 'is_audio_enabled'), $packageID);
        $photoLimit = $packageData['Package']['photo_limit'];

        if ($this->request->is('post')) {
            $photoArray = $this->Session->read('Property.photos');
            $photos = $this->request->data['photo'];
            $validPhotos = 0;
            $this->loadModel('TmpUploadPhoto');
            foreach ($photos as $photo) {
                $this->TmpUploadPhoto->create();
                if ($photoLimit == -1) {
                    if ($photo) {
                        if ($this->TmpUploadPhoto->save(array('session_id' => $this->Session->id(), 'tag' => 'property_photo', 'photo' => $photo))) {
                            $last = $this->TmpUploadPhoto->read(array('id', 'photo'), $this->TmpUploadPhoto->getLastInsertID());
                            $photoArray[$last['TmpUploadPhoto']['id']] = $last['TmpUploadPhoto']['photo'];
                            $validPhotos++;
                        }
                    }
                } else {
                    if ($photo && ($validPhotos < $photoLimit - 1)) {
                        if ($this->TmpUploadPhoto->save(array('session_id' => $this->Session->id(), 'tag' => 'property_photo', 'photo' => $photo))) {
                            $last = $this->TmpUploadPhoto->read(array('id', 'photo'), $this->TmpUploadPhoto->getLastInsertID());
                            $photoArray[$last['TmpUploadPhoto']['id']] = $last['TmpUploadPhoto']['photo'];
                            $validPhotos++;
                        }
                    }
                }
            }
            $this->Session->write('Property.photos', $photoArray);
            if ($preview) {
                $this->redirect(array('action' => 'preview'));
            } else {
                if ($packageData['Package']['is_audio_enabled']) {
                    $this->redirect(array('action' => 'upload_audio'));
                } else {
                    $this->redirect(array('action' => 'video_url'));
                }
            }
        }
        $this->set('sess_listing_type', $this->Session->read('Property.listing_type'));
        $this->set('sess_photos', $this->Session->read('Property.photos'));
        $this->set('photo_limit', $photoLimit);
        $this->set('preview', $preview);
    }

    public function upload_audio($back = null) { //6th step
        $packageID = $this->Session->read('Property.package_id');
        $this->loadModel('Package');
        $packageData = $this->Package->read(array('is_audio_enabled', 'is_video_enabled'), $packageID);
        $sessAudio = $this->Session->read('Property.audio');
        if ($packageData['Package']['is_audio_enabled']) {
            if ($this->request->is('post')) {
                if (isset($this->request->data['Properties']['audio']) && $this->request->data['Properties']['audio']['name']) {
                    $audio = $this->request->data['Properties']['audio'];
                    $this->loadModel('TmpUploadAudio');
                    $this->TmpUploadAudio->create();
                    if ($this->TmpUploadAudio->save(array('session_id' => $this->Session->id(), 'tag' => 'property_audio', 'audio' => $audio))) {
                        if ($sessAudio) {
                            foreach ($sessAudio as $key => $a) {
                                $tmpPhoto = $this->TmpUploadAudio->read(null, $key);
                                $this->TmpUploadAudio->delete();
                            }
                        }
                        $audioFile = $this->TmpUploadAudio->read(null, $this->TmpUploadAudio->getLastInsertId());
                        $this->Session->write('Property.audio.' . $this->TmpUploadAudio->getLastInsertId(), $audioFile['TmpUploadAudio']['audio']);
                        $this->redirect(array('action' => 'video_url'));
                    }
                } else {
                    $this->redirect(array('action' => 'video_url'));
                }
            }
        } else {
            if ($back) {
                $this->redirect(array('action' => 'upload_photos'));
            }
            $this->redirect(array('action' => 'video_url'));
        }
        $this->set('sess_audio', $sessAudio);
    }

    public function video_url($back = null) { //7th step
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
            if ($back) {
                $this->redirect(array('action' => 'upload_photos'));
            }
            if ($property_listing == 'rent') {
                $this->redirect(array('action' => 'availability_calendar'));
            } else {
                $this->redirect(array('action' => 'preview'));
            }
        }
        $this->set('sess_video', $this->Session->read('Property.video'));
    }

    public function availability_calendar($preview = null) { //8th step if rent
        if ($this->request->is('post')) {
            $dates = explode(',', $this->request->data['dates']);
            $this->Session->write('Property.reservation_dates', $dates);
            $this->redirect(array('action' => 'preview'));
        }
        $this->set('sess_reservation_dates', $this->Session->read('Property.reservation_dates'));
        $this->set('sess_listing_type', $this->Session->read('Property.listing_type'));
        $this->set('preview', $preview);
    }

    public function preview($params = null) { //preview the listing, the final step
        $this->layout = "property_preview";
        $this->set('activities', $this->Activity->find('all', array('conditions' => array('Activity.id' => $this->Session->read('Property.activities')))));
        $this->set('property', $this->Session->read('Property'));
    }

    public function save_property() {
        if ($this->request->is('post')) {
            $propertySess = $this->Session->read('Property');
            $property = array(
                'user_id' => $this->Auth->user('user_id'),
                'address1' => $propertySess['property_address']['address1'],
                'address2' => $propertySess['property_address']['address2'],
                'city' => $propertySess['property_address']['city'],
                'zip' => $propertySess['property_address']['zip'],
                'state' => $propertySess['property_address']['state'],
                'province' => $propertySess['property_address']['province'],
                'title' => $propertySess['property_desc']['title'],
                'description' => $propertySess['property_desc']['description'],
                'bedrooms' => $propertySess['property_desc']['bedrooms'],
                'bathrooms' => $propertySess['property_desc']['bathrooms'],
                'rate' => isset($propertySess['rate']) ? $propertySess['rate'] : '',
                'video' => isset($propertySess['video']) ? $propertySess['video'] : '',
                'audio' => isset($propertySess['audio']) ? str_replace('/tmp_audios', '/audios', array_shift(array_values($propertySess['audio']))) : '',
                'package_id' => $propertySess['package_id'],
                'additional_information' => isset($propertySess['additional_information']) ? $propertySess['additional_information'] : '',
                'listing_type' => $propertySess['listing_type'],
                'is_active' => 1
            );
            $this->Property->create();
            if ($this->Property->save($property)) {
                $propertyId = $this->Property->getLastInsertID();
                if (
                        $this->save_activities($propertySess, $propertyId) &&
                        $this->save_payment_types($propertySess, $propertyId) &&
                        $this->save_miscellaneous_items($propertySess, $propertyId) &&
                        $this->save_photos($propertySess, $propertyId) &&
                        $this->save_reservations($propertySess, $propertyId) &&
                        $this->save_rates($propertySess, $propertyId) &&
                        $this->save_rate($propertySess, $propertyId)
                ) {

                    if (isset($propertySess['audio'])) {
                        $file = new File(WWW_ROOT . array_shift(array_values($propertySess['audio'])));

                        if ($file->exists()) {
                            $dir = new Folder(WWW_ROOT . "files\uploads\properties\audios", true);
                            $file->copy($dir->path . DS . $file->name);
                        }
                    }

                    $sessionId = $this->Session->id();
                    $this->loadModel('TmpUploadPhoto');
                    $this->loadModel('TmpUploadAudio');
                    $this->TmpUploadPhoto->deleteAll(array('TmpUploadPhoto.session_id' => $sessionId));
                    $this->TmpUploadAudio->deleteAll(array('TmpUploadAudio.session_id' => $sessionId));

                    //delete audio file in tmp folder
                    if (isset($propertySess['audio'])) {
                        foreach ($propertySess['audio'] as $a) {
                            $fileA = new File(WWW_ROOT . $a, false, 0777);
                            $fileA->delete();
                        }
                    }

                    $this->Session->delete('Property');
                    $this->redirect(array('action' => 'view/' . $propertyId));
                } else {
                    echo 'error2';
                    $this->autoRender = false;
                }
            } else {
                var_dump($this->Property->validationErrors);
                echo 'error1';
                $this->autoRender = false;
            }
        }
    }

    private function save_payment_types($propertySess, $propertyId) {
        //payment types
        $this->loadModel('PropertyPaymentType');
        if (isset($propertySess['payment_types'])) {
            $error = 0;
            foreach ($propertySess['payment_types'] as $pay) {
                $this->PropertyPaymentType->create();
                if (!$this->PropertyPaymentType->save(array('property_id' => $propertyId, 'payment_type_id' => $pay))) {
                    $error++;
                }
            }
            return $error ? false : true;
        } else {
            return true;
        }
        return false;
    }

    private function save_miscellaneous_items($propertySess, $propertyId) {
        //activities
        $this->loadModel('PropertyMiscellaneousItem');
        if (isset($propertySess['miscellaneous_items'])) {
            $error = 0;
            foreach ($propertySess['miscellaneous_items'] as $misc) {
                $this->PropertyMiscellaneousItem->create();
                if (!$this->PropertyMiscellaneousItem->save(array('property_id' => $propertyId, 'miscellaneous_item_id' => $misc))) {
                    $error++;
                }
            }
            return $error ? false : true;
        } else {
            return true;
        }
        return false;
    }

    private function save_activities($propertySess, $propertyId) {
        //activities
        if (isset($propertySess['activities'])) {
            $error = 0;
            foreach ($propertySess['activities'] as $act) {
                $this->PropertyActivity->create();
                if (!$this->PropertyActivity->save(array('property_id' => $propertyId, 'activity_id' => $act))) {
                    $error++;
                }
            }
            return $error ? false : true;
        } else {
            return true;
        }
        return false;
    }

    private function save_photos($propertySess, $propertyId) {
        //photos
        if (isset($propertySess['photos'])) {
            $error = 0;
            foreach ($propertySess['photos'] as $key => $photo) {

                $photoSave = str_replace('/tmp_photos', '/photos', $photo);
                $this->PropertyPhoto->create();
                if ($this->PropertyPhoto->save(array('property_id' => $propertyId, 'photo' => $photoSave))) {
                    //transfer tmp photos to property photos directory
                    $image = $photo;
                    $imgFile = '';
                    $ext = '';
                    if ($image != '') {
                        $imgFile = substr($image, 0, -4);
                        $ext = substr($image, -3);
                    }

                    $file = new File(WWW_ROOT . $photo);
                    $filereg = new File(WWW_ROOT . $imgFile . '-resize-465x382-r.' . $ext, false, 0777);
                    $filesmall = new File(WWW_ROOT . $imgFile . '-resize-65x60-s.' . $ext, false, 0777);
                    $filelist = new File(WWW_ROOT . $imgFile . '-resize-200x167-l.' . $ext, false, 0777);

                    if ($file->exists() && $filereg->exists() && $filesmall->exists()) {
                        $dir = new Folder(WWW_ROOT . "files\uploads\properties\photos", true);
                        $file->copy($dir->path . DS . $file->name);
                        $filereg->copy($dir->path . DS . $filereg->name);
                        $filesmall->copy($dir->path . DS . $filesmall->name);
                        $filelist->copy($dir->path . DS . $filelist->name);
                    }

                    //deleting associated transformed files
                    $this->loadModel('TmpUploadPhoto');
                    if ($this->TmpUploadPhoto->delete($key)) {
                        $filereg->delete();
                        $filesmall->delete();
                        $filelist->delete();
                    }
                } else {
                    $error++;
                }
            }
            return $error ? false : true;
        } else {
            return true;
        }
        return false;
    }

    private function save_reservations($propertySess, $propertyId) {
        //reservations
        if (isset($propertySess['reservation_dates'])) {
            $error = 0;
            foreach ($propertySess['reservation_dates'] as $res) {
                $this->Reservation->create();
                if (!$this->Reservation->save(array('property_id' => $propertyId, 'date' => date("Y-m-d", strtotime($res))))) {
                    $error++;
                }
            }
            return $error ? false : true;
        } else {
            return true;
        }
        return false;
    }

    private function save_rates($propertySess, $propertyId) {
        //if rent -> rates
        if (isset($propertySess['rates'])) {
            $error = 0;
            foreach ($propertySess['rates'] as $key => $rate) {
                $this->PropertyRate->create();
                $rateData = array(
                    'property_id' => $propertyId,
                    'season_id' => $key,
                    'from' => $rate['from'],
                    'to' => $rate['to'],
                    'night_rate' => $rate['night_rate'] ? $rate['night_rate'] : '',
                    'week_rate' => $rate['week_rate'] ? $rate['week_rate'] : '',
                    'month_rate' => $rate['month_rate'] ? $rate['month_rate'] : '',
                );
                if (!$this->PropertyRate->save($rateData)) {
                    $error++;
                }
            }
            return $error ? false : true;
        } else {
            return true;
        }
        return false;
    }

    private function save_rate($propertySess, $propertyId) {
        //if sale -> rate
        if (isset($propertySess['rate'])) {
            $this->PropertyRate->create();
            if ($this->PropertyRate->save(array(
                        'property_id' => $propertyId,
                        'price' => $propertySess['rate']
                    ))) {
                return true;
            } else {
                return false;
            }
        } else {
            return true;
        }
        return false;
    }
    
    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->layout = "property_preview";
        $this->Property->id = $id;
        if (!$this->Property->exists()) {
            throw new NotFoundException(__('Invalid property'));
        }
        $this->set('property_photos', $this->PropertyPhoto->find('all', array('fields' => array('PropertyPhoto.photo'), 'conditions' => array('PropertyPhoto.property_id' => $id))));
        $this->set('property_activities', $this->Activity->find('all', array('fields' => array('Activity.name', 'Activity.icon'), 'conditions' => array('Activity.id' => $this->PropertyActivity->find('list', array('conditions' => array('PropertyActivity.property_id' => $id), 'fields' => array('PropertyActivity.activity_id')))))));
        $this->set('property', $this->Property->read(null, $id));
        $this->loadModel('PropertyPaymentType');
        $this->set('payment_type', $this->PropertyPaymentType->find('count', array('conditions' => array('PropertyPaymentType.property_id' => $id))));
        $this->loadModel('PropertyMiscellaneousItem');
        $this->set('handicap_accessibility', $this->PropertyMiscellaneousItem->find('count', array('conditions' => array('PropertyMiscellaneousItem.property_id' => $id, 'PropertyMiscellaneousItem.miscellaneous_item_id' => 1))));
        $this->set('pet_friendly', $this->PropertyMiscellaneousItem->find('count', array('conditions' => array('PropertyMiscellaneousItem.property_id' => $id, 'PropertyMiscellaneousItem.miscellaneous_item_id' => 2))));
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

    public function contact_owner() {

        if ($this->request->is('post')) {
            if (isset($this->request->data['Property']['property_id']) && sizeof($this->Property->read(null, $this->request->data['Property']['property_id']))) {
                $prop = $this->Property->read(null, $this->request->data['Property']['property_id']);
                $emailData = array(
                    'to' => 'daisy@localhost.com', //temporary email
                    'from' => 'noreply@mexicovr.com',
                    'subject' => 'Someone contacted you about your property - ' . $prop['Property']['title'],
                    'viewVars' => array(
                        'emailContent' => 'First Name: ' . $this->request->data['Property']['first_name'] . '\nLast Name: ' . $this->request->data['Property']['first_name'] . '\nEmail Address: ' . $this->request->data['Property']['email_address'] . '\nHome Phone: ' . $this->request->data['Property']['home_phone'] . '\n\nComments and Questions: \n' . $this->request->data['Property']['comments'],
                        'user' => array('User' => $prop['User'])
                    )
                );
                $this->send_mail($emailData);
                echo json_encode(array('message' => 'Your message has been sent.'));
            } else {
                echo json_encode(array('message' => 'Error encountered.'));
            }
        }
        if ($this->request->is('ajax')) {
            $this->layout = 'ajax';
            $this->autoRender = false;
        }
    }

    public function display_contact_element($propertyId) {
        $this->set('property_id', $propertyId);
        $this->render('/Elements/contact');
    }

    public function my_list() {
        $uId = $this->Auth->user('user_id');
        $type = $this->Auth->user('account_type') != 'seller' ? 'rent' : 'sale';
        $properties = $this->Property->find('all', array(
            'conditions' => array('Property.is_active' => 1, 'Property.is_deleted' => 0, 'Property.listing_type' => $type, 'Property.user_id' => $uId),
            'fields' => array('Property.title', 'Property.rate', 'Property.id', 'Property.listing_type'),
                ));
        $this->loadModel('Review');
        foreach ($properties as $k => $p) {
            $properties[$k]['photo'] = $this->PropertyPhoto->find('first', array('conditions' => array('PropertyPhoto.property_id' => $p['Property']['id']), 'fields' => array('PropertyPhoto.photo')));
            $rates = $this->PropertyRate->find('first', array('conditions' => array('PropertyRate.property_id' => $p['Property']['id']), 'fields' => array('PropertyRate.night_rate', 'PropertyRate.week_rate', 'PropertyRate.price')));
            $avgRating = $this->Review->find('all', array('conditions' => array('Review.property_id' => $p['Property']['id']), 'fields' => array('AVG(Review.rate) as avg')));
            $properties[$k]['rates'] = $rates;
            $properties[$k]['price'] = $type == 'sale' ? $rates['PropertyRate']['price'] : $rates['PropertyRate']['night_rate'];
            $properties[$k]['star_rating'] = $avgRating[0][0]['avg'] ? $avgRating[0][0]['avg'] : 0;
            $this->loadModel('PropertyPaymentType');
            $properties[$k]['payment_type'] = $this->PropertyPaymentType->find('count', array('conditions' => array('PropertyPaymentType.property_id' => $p['Property']['id'])));
            $this->loadModel('PropertyMiscellaneousItem');
            $properties[$k]['handicap_accessibility'] = $this->PropertyMiscellaneousItem->find('count', array('conditions' => array('PropertyMiscellaneousItem.property_id' => $p['Property']['id'], 'PropertyMiscellaneousItem.miscellaneous_item_id' => 1)));
            $properties[$k]['pet_friendly'] = $this->PropertyMiscellaneousItem->find('count', array('conditions' => array('PropertyMiscellaneousItem.property_id' => $p['Property']['id'], 'PropertyMiscellaneousItem.miscellaneous_item_id' => 2)));
        }
        if ($this->request->is('post')) {
                $sort = isset($this->request->data['sort']) && $this->request->data['sort'] == 'star_rating' ? 'star_rating' : 'price';
                $order = isset($this->request->data['order']) && $this->request->data['order'] == 'desc' ? 'desc' : 'asc';
            if ($sort == 'price') {
                $price = array();
                foreach ($properties as $key => $row) {
                    $price[$key] = $row['price'];
                }
                if ($order == 'asc') {
                    array_multisort($price, SORT_ASC, $properties);
                } else {
                    array_multisort($price, SORT_DESC, $properties);
                }
            } else {
                $star = array();
                foreach ($properties as $key => $row) {
                    $star[$key] = $row['star_rating'];
                }
                if ($order == 'desc') {
                    array_multisort($star, SORT_DESC, $properties);
                } else {
                    array_multisort($star, SORT_ASC, $properties);
                }
            }
        
        }
        $this->set('property_type', $type);

        $this->set('properties', $properties);
        $this->render('properties');
        if ($this->request->is('ajax')) {
            $this->layout = 'ajax';
            $this->render('/Elements/property_list');
        }
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
        if (!$this->Property->exists() && !is_user_property_exist($id,$this->Auth->user('user_id'))) {
            $this->Session->setFlash(__('Failed deleting the property. Property not found.'));
        }else{
            $this->Property->set('is_deleted', '1');
            if ($this->Property->save()) {
                $this->Session->setFlash('Property deleted.', 'default', array('class' => 'alert alert-success'));
            }
        }
//        $this->Session->setFlash(__('Property was not deleted.'));
        $this->redirect(array('action' => 'my_list'));
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
        if (!$this->Property->exists() && !is_user_property_exist($id,$this->Auth->user('user_id'))) {
            $this->Session->setFlash(__('Cannot edit property. Property not found.'));
            $this->redirect(array('action' => 'my_list'));
        }
//        if ($this->request->is('post') || $this->request->is('put')) {
//            if ($this->Property->save($this->request->data)) {
//                $this->Session->setFlash(__('The property has been saved'));
//                $this->redirect(array('action' => 'index'));
//            } else {
//                $this->Session->setFlash(__('The property could not be saved. Please, try again.'));
//            }
//        } else {
//            $this->request->data = $this->Property->read(null, $id);
//        }
        $this->layout = "property_preview";
        $this->set('activities', $this->Activity->find('all', array(
            'conditions' => array('Activity.id' => $this->PropertyActivity->find('list',array('conditions'=>array('PropertyActivity.property_id'=>$id), 'fields'=>array('PropertyActivity.activity_id')))))));
        $prop = $this->Property->find('first',array('conditions'=>array('Property.id'=>$id)));
//        var_dump($prop['Property']);
        $this->set('property', array('property_desc'=>$prop['Property']));
        $this->render('preview');
    }
}
