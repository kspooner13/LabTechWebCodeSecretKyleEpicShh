<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('AppController', 'Controller');

/**
 * CakePHP HealthCheckController
 * @author kspooner
 */
class HealthCheckController extends AppController {

    public $helpers = array('Html', 'Form');
    
    public $components = array('Session', 'Paginator');
    
   // public $paginate = array('limit' => '25', 'order' => array('ClientID' => 'DESC'));
    
        var $paginate = array(
        'limit' => 25,
        'order' => array(
        'HealthCheck.ClientID' => 'desc'
        )
        );

    public function index() {

        $this->Paginator->settings = array('limit' => 25, 'order' => array('HealthCheck.ClientID' => 'desc'));
        $this->paginate = array('limit'=>10);
        $clientScores = $this->paginate('HealthCheck');
        $this->set(compact('clientScores', $clientScores));
        
        
        
     /*  $data = $this->HealthCheck->find('all', array('order' => '`Client Name`'));
        $this->paginate = array('limit' => 25);
      //  $paginate = array('limit' => 25);
        $pagData = $this->paginate('HealthCheck');
        $this->set('clientScores', $pagData);
       // $this->helpers['Paginator'] = array('ajax' => 'Ajax'); */
        
    }

}
