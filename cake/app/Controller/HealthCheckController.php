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
        
        
        

       // $this->helpers['Paginator'] = array('ajax' => 'Ajax'); */
        
    }
    
    //This controls the base for the "per team" group
    
    public function team($assignment) {
        $team = urldecode($assignment);
        $team = '%'.$team.'%';
        
        if (!($team2 = $this->HealthCheck->find('all', array('conditions' => array('`Team Assignment` LIKE' => $team))))) {
            throw new NotFoundException(__('Team not found ERROR CODE: LT_HC_ET01'));
            }
            
            $this->set('teamScores', $team2);
            
    }
    
    public function client($clientid) {
    
                if (!
                        ($client = $this->HealthCheck->query("SELECT * FROM plugin_lthc_scores_computers WHERE ClientID = ".$clientid.""))
                        
                        ) {
            throw new NotFoundException(__('Team not found ERROR CODE: LT_HC_ET01'));
            }
            
            $this->set('clientScores', $client);
        
        
    }

}
