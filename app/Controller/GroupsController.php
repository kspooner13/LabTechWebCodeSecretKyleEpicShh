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
class GroupsController extends AppController {

/**
 * Displays a view
 *
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */
	
	
	public $helpers = array('Html', 'Form');
	
	public $components = array('Session', 'Paginator');
        
    public $uses = array('Drive', 'Computer', 'Client', 'Ticket', 'Group');
	
	public $paginate = array('limit' => 15);
	
	
	//This is the default page when loading this controller/model/view
	
	
                
                
        public function index() {
            
            if (!empty($this->Session->read('database'))) {
            $this->Group->setDataSource($this->Session->read('database'));
            
			} else {
				$this->Group->setDataSource('default');
			}


			
			
			
			
            
        }        
		
		public function group($group) {
			//Set DB type
			if (!empty($this->Session->read('database'))) {
            $this->Group->setDataSource($this->Session->read('database'));
            
			} else {
				$this->Group->setDataSource('default');
			}
			//End DB Type
			
			//Lets get the data for the local group.
			$groupData = $this->Group->find('first', array(
            //MISSING SECURITY - VERIFY SEC IS REQUIRED ON GROUPS - ks
            'conditions' => array('group.groupid' => $group)));
			
			
			$this->set('group', $groupData);
			
			
		}
		
		public function getNav() {
			
			$navList = $this->Group->find('all', array (
				'conditions' => array('group.ParentID' => '0'),
				'fields' => array('group.GroupID', 'group.Name'),
				'order' => array('group.Name')
			));
			if ($this->request->is('requested')) {
				return $navList;
			}
		}
        
        
        
      
 }
        
        


