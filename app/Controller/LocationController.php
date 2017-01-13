<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('AppController', 'Controller');

/**
 * CakePHP LocationController
 * @author Spooner
 */
class LocationController extends AppController {


public function getloc() {

$clientid = $this->request->data['Client']['ClientID'];

$locations = $this->Location->find('list', array(
'conditions' => array('Location.ClientID' => $clientid),
 'fields' =>array('Location.LocationID', 'Location.Name'),
 'recursive' => -1
));

$this->set('locations', $locations);
$this->layout = 'ajax';
}





}
