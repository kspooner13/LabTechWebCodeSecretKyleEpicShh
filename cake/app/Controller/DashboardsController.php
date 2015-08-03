<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
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

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class DashboardsController extends AppController {
	
	
	public $helpers = array('Html', 'Form');
        public $uses = array('Computer', 'Dashboard', 'Client', 'Ticket');
	
	public $components = array('Session', 'Paginator');
	
	public $paginate = array('limit' => 15);
	
	
	//This is the default page when loading this controller/model/view
	public function index() {
                $compCount = $this->Computer->query("SELECT count(*) FROM computers");
		$this->set('compCount', $compCount);
                
                $clientCount = $this->Client->query("SELECT count(*) FROM Clients");
                $this->set('clientCount', $clientCount);
                
                $offlineCount = $this->Computer->query("SELECT count(*) FROM computers WHERE (os LIKE '%server%' OR os LIKE '%linux%') AND
 ((computerid IN (SELECT computerid FROM heartbeatcomputers WHERE LastHeartbeatTime <  DATE_ADD(NOW(),INTERVAL -(SELECT heartbeatdbupdateinterval *3 FROM advancedconfig)SECOND))))");
                $this->set('offlineCount', $offlineCount);
                
                $ticketCount = $this->Ticket->query("SELECT count(*) FROM TICKETS WHERE `status`='1' OR `status`='2' AND externalid != NULL");
                $this->set('ticketCount', $ticketCount);
                
                $clientDrop = $this->Client->find('list', array('fields' => array('Client.ClientID', 'Client.Company'), 'order' =>array('Client.Company ASC')));
                $this->set('clientDrop', $clientDrop);
                        
                $labtechServer = $this->Computer->query('SELECT * FROM vxr_computers WHERE computerid = 1');
                    $this->set('ltserver', $labtechServer);
                
                       
                
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
        public function downloadAgent() {
            
            $location = $this->request->data['Location']['LocationID'];
            $type = $this->request->data['type'];
            $lt = Configure::read('Location');
            
            
            $path = 'http://'.$lt.'/Labtech/';
            
            if ($type === 'EXE') {
                $path .= 'Deployment.aspx?Probe=1&ID='.$location.'';
            }
            else {
                $path .= 'Deployment.aspx?Probe=1&installType='.$type.'&MSILocations='.$location.'';
            }
            
            $this->response->header('Location', $path);
            
            
        }
}
