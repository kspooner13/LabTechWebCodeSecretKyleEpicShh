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
class ClientsController extends AppController {

/**
 * Displays a view
 *
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */
	
	
	public $helpers = array('Html', 'Form');
	
	public $components = array('Session', 'Paginator');
	
	public $paginate = array('limit' => 15);
	
	
	//This is the default page when loading this controller/model/view
	public function index() {
		$this->Client->recursive = -1;
		$this->set('Clients', $this->paginate());
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
