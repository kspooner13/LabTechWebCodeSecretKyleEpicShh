<?php

/**
 * Static content controller.
 *
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('AppController', 'Controller');
App::import('Vendor', 'cw');


/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class ClientsController extends AppController {

    /**
     * Displays a view
     *
     * @return void
     * @throws NotFoundException When the view file could not be found
     * 	or MissingViewException in debug mode.
     */
    public $helpers = array('Html', 'Form', 'Js');
    public $components = array('Session', 'Paginator', 'RequestHandler');
    public $uses = array('Computer', 'Dashboard', 'Client', 'Ticket');

    //This is the default page when loading this controller/model/view
    public function index() {
        

        
        if (!empty($this->Session->read('database'))) {
            $this->Client->setDataSource($this->Session->read('database'));
            //  $this->User->setDataSource($this->request->data['user']['database']);
        } else {
            $this->Client->setDataSource('default');
        }
        
        $PSA = Configure::read('PSA');


        If ($PSA != 'true')   {
        $this->Paginator->settings = array('limit' => 15,
                'joins' => array(
                    array(
                        'table' => 'usersec',
                        'alias' => 'usersec',
                        'type' => 'INNER',
                        'conditions' => array(
                            'usersec.clientid = client.clientid AND usersec.computerid =\'0\''
                        )
                    ),
                    array(
                        'table' => 'users',
                        'alias' => 'users',
                        'type' => 'INNER',
                        'conditions' => array(
                            'users.userid = usersec.userid '
                        )
                    )               
                ) ,
                'conditions' => array('users.name' => $_SESSION['Username']),
                'order' => array('Client.ClientID' => 'asc')
            );
        }
        else {
            $this->Paginator->settings = array('limit' => 15,
                'fields' => array(
                    'plugin_cw_clientmapping.CWCompanyRecID', 'client.ClientID', 'client.Name', 'client.Company', 'client.Address1', 'client.Address2', 'client.City', 'client.State', 'client.Score'
                ),
                'joins' => array(
                    array(
                        'table' => 'usersec',
                        'alias' => 'usersec',
                        'type' => 'INNER',
                        'conditions' => array(
                            'usersec.clientid = client.clientid AND usersec.computerid =\'0\''
                        )
                    ),
                    array(
                        'table' => 'users',
                        'alias' => 'users',
                        'type' => 'INNER',
                        'conditions' => array(
                            'users.userid = usersec.userid '
                        )
                    ),
                    array(
                        'table' => 'plugin_cw_clientmapping',
                        'alias' => 'plugin_cw_clientmapping',
                        'type' => 'INNER',
                        'conditions' => array(
                            'client.clientid = plugin_cw_clientmapping.clientid'
                        )
                    )               
                ) ,
                'conditions' => array('users.name' => $_SESSION['Username']),
                'order' => array('Client.ClientID' => 'asc')
            );
            
        }
        $client = $this->paginate('Client');
        $this->set(compact('client', $client));
    }

    public function client($clientid, $psaid) {
        
        $PSA = Configure::read('PSA');
        
        if ($PSA === 'false') {
            
        }
        else if ($PSA == true) {
        $cw = new cwAPI();
        $cw->setAction("GetCompany");
	$options = array('id' => '2'); // ConnectWise RecID
	$cw->setParameters($options);
	$ret = $cw->makeCall();
        $array = json_decode(json_encode($ret),true);
        $this->set('psa', $array);
        }
        
        if (!($client = $this->Client->find('first', array(
            'joins' => array(
                array(
                    'table' => 'usersec',
                    'alias' => 'usersec',
                    'type' => 'INNER',
                    'conditions' => array(
                        'usersec.clientid = client.clientid'
                    )
                ),
                array(
                    'table' => 'users',
                    'alias' => 'users',
                    'type' => 'INNER',
                    'conditions' => array(
                        'users.userid = usersec.userid'
                    )
                )
               
            ) ,
            'conditions' => array('Client.ClientID' => $clientid),
            'order' => array('Client.Name' => 'Asc')
            )))) {
            throw new NotFoundException(__('Client not found'));
        }

        $this->set(compact('client'));












    }

    public function countTotal() {
        $this->Client->find('count');
        $this->set('client');
    }

    public function view($clientid) {
        
        

        
        
        if (!($client = $this->Client->find('first', array(
            'conditions' => array('Client.ClientID' => $clientid))))) {
            throw new NotFoundException(__('Client not found'));
        }
        $this->set(compact('client'));
    }

}
