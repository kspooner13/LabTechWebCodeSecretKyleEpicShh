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
class ComputersController extends AppController {

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
	
	public function countTotal() {
		$this->Computer->find('count');
		$this->set('computer');
		}
                
                
        public function index() {
            
            if (!empty($this->Session->read('database'))) {
            $this->Computer->setDataSource($this->Session->read('database'));
            //  $this->User->setDataSource($this->request->data['user']['database']);
        } else {
            $this->Computer->setDataSource('default');
        }


        $this->Paginator->settings = array('limit' => 15,
            'fields' => array('computer.ComputerID, computer.ClientID, computer.Name, clients.Name, computer.OS, computer.Username, computer.LocalAddress, computer.BiosName'),
            'joins' => array(
                array(
                    'table' => 'usersec',
                    'alias' => 'usersec',
                    'type' => 'INNER',
                    'conditions' => array(
                        'usersec.computerid = computer.computerid '
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
                   'table' => 'clients',
                   'alias' => 'clients',
                   'type' => 'INNER',
                   'conditions' => array(
                       'computer.clientid = clients.clientid'
                   )
               )
            ) ,
            'conditions' => array('users.name' => $_SESSION['Username']),
            'order' => array('computers.computerID' => 'asc'));
        $computer = $this->paginate('Computer');
        $this->set(compact('computer', $computer));
            
        }        

}
