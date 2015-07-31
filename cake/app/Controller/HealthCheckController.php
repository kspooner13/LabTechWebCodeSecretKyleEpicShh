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

    public function index() {
        
        $getClientScores = $this->HealthCheck->find('all');
        $this->set('clientScores', $getClientScores);
        
    }

}
