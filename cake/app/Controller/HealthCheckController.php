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

    public $helpers = array('Html', 'Form', 'Js');
    public $components = array('Session', 'Paginator', 'RequestHandler');

    public function index() {

        $this->Paginator->settings = array('limit' => 25, 'order' => array('HealthCheck.ClientID' => 'desc'));
        $clientScores = $this->paginate('HealthCheck');
        $this->set(compact('clientScores', $clientScores));
        
        
        $avg = $this->HealthCheck->query("SELECT FORMAT(AVG(`Avg_Score`),2) AS score,"
                . " FORMAT(AVG(`Antivirus`),2) AS AV,"
                . " FORMAT(AVG(`Intrusion`),2) AS `INT`,"
                . " FORMAT(AVG(`Usability`),2) AS Usability,"
                . " FORMAT(AVG(`Event_Log`),2) AS EL,"
                . " FORMAT(AVG(`Disk`),2) AS `Disk`, "
                . "FORMAT(AVG(`Services`),2) AS Services,"
                . " FORMAT(AVG(`Updates`),2) AS Updates"
                . " FROM plugin_lthc_scores");
        
        $this->set(compact('avg', $avg));
        



        // $this->helpers['Paginator'] = array('ajax' => 'Ajax'); */
    }

    //This controls the base for the "per team" group

    public function team($assignment) {
        $team = urldecode($assignment);
        $team = '%' . $team . '%';
        $this->Paginator->settings = array(
            'conditions' => array('HealthCheck.Team_Assignment LIKE' => $team),
            'limit' => 10,
            'update' => '#teamTable',
            'evalScripts' => true
        );



        if (!(
                $team2 = $this->Paginator->paginate('HealthCheck')

                )) {
            throw new NotFoundException(__('Team not found ERROR CODE: LT_HC_ET01'));
        }

        $this->set('teamScores', $team2);
    }

    public function client($clientid) {

        if (!
                ($client = $this->HealthCheck->query("SELECT * FROM plugin_lthc_scores_computers WHERE ClientID = " . $clientid . ""))
        ) {
            throw new NotFoundException(__('Team not found ERROR CODE: LT_HC_ET01'));
        }

        $this->set('clientScores', $client);
    }

}
