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
 *  or MissingViewException in debug mode.
 */
    
    
    public $helpers = array('Html', 'Form');
    
    public $components = array('Session', 'Paginator');
        
    public $uses = array('Drive', 'Computer', 'Client', 'Ticket');
    
    public $paginate = array('limit' => 15);
    
    
    //This is the default page when loading this controller/model/view
    
    public function countTotal() {
        $this->Computer->find('count');
        $this->set('computer');
        }
                
                
   public function index() {
   
            if (!empty($this->Session->read('database'))) {
            $this->Computer->setDataSource($this->Session->read('database'));
            
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
        


        public function computer() {
            $computerid = $this->request->params['id'];
        if (!($computer = $this->Computer->find('first', array(
            'joins' => array(
                array(
                    'table' => 'usersec',
                    'alias' => 'usersec',   
                    'type' => 'INNER',
                    'conditions' => array(
                        'usersec.computerid = computer.computerid'
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
            'conditions' => array('Computer.ComputerID' => $computerid),
            'order' => array('Computer.Name' => 'Asc')
            )))) {
            throw new NotFoundException(__('ComputerID is not in the Database'));
        }
        //GET DRIVE DATA
        $drive =  $this->getComputerDrivebyID($computerid);
        //setup drive conditions
        
        $count = 0 ;

         foreach($drive as $dr){
            if(($dr['Drive']['Free'] != 0) && ($dr['Drive']['FileSystem'] != 'UKNFS') && ($dr['Drive']['FileSystem'] != 'CDFS')){    

                   $driveData[$count]["Free"] = $this->driveSize($dr['Drive']['Free'], "number");
                   $driveData[$count]["Size"] = $this->driveSize($dr['Drive']['Size'], "number");
                   $driveData[$count]["Tag"] = $this->driveSize($dr['Drive']['Size'], "word"); 
                   $driveData[$count]["Letter"] = $dr['Drive']['Letter'];
                   $driveData[$count]["VolumeName"] = $dr['Drive']['VolumeName'];
                   $driveData[$count]["BackupFlag"] = $dr['Drive']['BackupFlag'];
                   $driveData[$count]["Model"] = $dr['Drive']['Model'];
                   $driveData[$count]["FileSystem"] = $dr['Drive']['FileSystem'];
                   $driveData[$count]["Model"] = $dr['Drive']['Model']; 
                   $count = $count + 1;  
                    }
                }                         
        //setup table conditions
        $ticketcondition = array( 'conditions' => array( 'Ticket.ComputerID = "'.$computerid.'"')
            );
  
        
        $ticket;// =  $this->getBaseInfo("Ticket", $ticketcondition,"");
  
        $ticketOpen = $this->Ticket->find('count', array('conditions' => array('ticket.ComputerID' => $computerid, 'ticket.Status' => '1')));
        $ticketClosed = $this->Ticket->find('count', array('conditions' => array('ticket.ComputerID' => $computerid, 'ticket.Status >=' => '4')));
        $ticketStalled = $this->Ticket->find('count', array('conditions' => array('ticket.ComputerID' => $computerid, 'ticket.Status' => '3')));
        $compCommands = $this->Computer->query('SELECT h.status, h.user, r.name, h.DateFinished  FROM h_commands h
                                                INNER JOIN remotecommands r ON h.command = r.id
                                                WHERE computerid = '.$computerid.' LIMIT 5');
        $this->set(compact('compCommands',$compCommands));
        $this->set(compact('ticketStalled'));
        $this->set(compact('ticketClosed'));
        $this->set(compact('ticket'));
        $this->set(compact('ticketOpen'));
        $this->set(compact('driveData'));
        $this->set(compact('computer'));


    }

         function getComputerDrivebyID($computerid){
          if(!$baseinfo = $this->Drive->find('all',
          array( 'conditions' => array( 'Drive.ComputerID = "'.$computerid.'"', 'SmartStatus != "%USB%"')
            )
            ));
        return $baseinfo;
        }


       function driveSize($size, $type){

        $drSize = $size / 1024;
        if($size / 1024 > 1024){
            if ($type == "number"){
                $driveSize = round($drSize/1024,2);
            }
            else
            {
                $driveSize = "TB";
            }
        }
        else
        {
            if ($type == "number"){
                $driveSize = round($drSize, 2);
            }
            else
            {
                $driveSize = "GB";
            }
        }
       return $driveSize;

    }
   

}
