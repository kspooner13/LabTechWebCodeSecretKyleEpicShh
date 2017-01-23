             <?php
            $dash = $this->Html->url(
                    array(
                        'controller' => 'dashboards',
                        'action' => 'index',
                        'full_base' => true
                    )
            );
            $comp = $this->Html->url(
                    array(
                        'controller' => 'computers',
                        'action' => 'index',
                        'full_base' => true
                    )
                    );
			$client = $this->Html->url(
					array (
						'controller' => 'clients',
						'action' => 'index',
						'full_base' => true,
						)
					);
      $logout = $this->Html->url(array('controller' =>'users', 'action'=>'logout','full_base' => true));
              $navList = $this->requestAction(
              'groups/getNav'
              );
            ?>

  <header class="main-nav clearfix">  
    <div class="top-search-bar">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <div class="search-input-addon">
              <span class="addon-icon"><i class="icon-search4"></i></span>
              <input type="text" class="form-control top-search-input" placeholder="Search">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar-left pull-left">
      <div class="clearfix">
        <ul class="left-branding pull-left">
          <li><span class="left-toggle-switch visible-handheld"><i class="icon-menu7"></i></span></li>
          <li>
            <a href="#"><div class=""><h2>EPIC!!</h2></div></a>
          </li>
        </ul>       
      </div>
    </div>




<?php
$active = $this->params['controller'];
?>
<div class="navbar-right pull-right">
      <div class="clearfix">        
        <ul class="pull-right top-right-icons">
          <li><a href="index2.htm#" class="btn-top-search"><i class="icon-search4"></i></a></li>          
          <li class="dropdown apps-dropdown hidden-xs">
            <a href="index2.htm#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-grid4"></i></a>
            <div class="dropdown-menu">
              <ul class="shortcuts clearfix">
                <li>
                  <a href="http://localhost/templates/penguin/material/page_emails.php"><i class="icon-envelop"></i>
                    <span class="apps-noty">4</span>
                    <span class="apps-label">Email</span>
                  </a>
                </li>
                <li>
                  <a href="http://localhost/templates/penguin/material/page_tasks.php"><i class="icon-task"></i>
                    <span class="apps-noty">12</span>
                    <span class="apps-label">Tasks</span>
                  </a>
                </li>
                <li>
                  <a href="http://localhost/templates/penguin/material/page_invoice_list.php"><i class="icon-cash4"></i>
                    <span class="apps-label">Invoices</span>
                  </a>
                </li>
                <li>
                  <a href="http://localhost/templates/penguin/material/page_reports.php"><i class="icon-chart"></i>
                    <span class="apps-label">Reports</span>
                  </a>
                </li>
                <li>
                  <a href="http://localhost/templates/penguin/material/page_file_manager.php"><i class="icon-attachment"></i>
                    <span class="apps-label">Files</span>
                  </a>
                </li>
                <li>
                  <a href="http://localhost/templates/penguin/material/page_projects_list.php"><i class="icon-briefcase3"></i>
                    <span class="apps-label">Projects</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="dropdown notifications">
            <a href="index2.htm#" class="btn-notification dropdown-toggle" data-toggle="dropdown"><span class="bubble">6</span><i class="icon-bell2"></i></a>
            <div class="dropdown-menu">
              <div>                             
                <div class="media-container">                     
                  <ul class="clearfix">
                    <li class="clearfix">
                      <a href="index2.htm#" class="media-thumb"><img src="assets/images/faces/face1.png" alt="image">
                      </a><a href="index2.htm#" class="media-title"><strong>Jane Elliott </strong>Sed ut perspiciatis... <span class="media-time">today at 18:20 pm</span></a>
                    </li>
                    <li class="clearfix">
                      <a href="index2.htm#" class="media-thumb"><img src="assets/images/faces/face2.png" alt="image">
                      </a><a href="index2.htm#" class="media-title"><strong>Florence Douglas </strong>Nemo enim... <span class="media-time">today at 10:29 am</span></a>
                    </li>
                    <li class="clearfix">
                      <a href="index2.htm#" class="media-thumb"><img src="assets/images/faces/face3.png" alt="image">
                      </a><a href="index2.htm#" class="media-title"><strong>Jacqueline Howell </strong>Neque porro... <span class="media-time">yesterday at 13:23 pm</span></a>
                    </li>
                    <li class="clearfix">
                      <a href="index2.htm#" class="media-thumb"><img src="assets/images/faces/face4.png" alt="image">
                      </a><a href="index2.htm#" class="media-title"><strong>Eugine Turner </strong>Ut enim ad minima... <span class="media-time">yesterday at 14:40 pm</span></a>
                    </li>
                    <li class="clearfix">
                      <a href="index2.htm#" class="media-thumb"><img src="assets/images/faces/face5.png" alt="image">
                      </a><a href="index2.htm#" class="media-title"><strong>Andrew Brewer </strong>Quis autem vel... <span class="media-time">1 month ago</span></a>
                    </li>
                    <li class="clearfix">
                      <a href="index2.htm#" class="media-thumb"><span class="media-letter">J</span>
                      </a><a href="index2.htm#" class="media-title"><strong>Jonaly Smith </strong>At vero eos et... <span class="media-time">1 month ago</span></a>
                    </li>                       
                  </ul>
                  <a class="btn btn-link btn-block btn-view-all" href="index2.htm#"><span><i class="icon-comment"></i> View all messages</span></a>
                </div>                                  
              </div>
            </div>
          </li>
          <li><a href="index2.htm#" class="right-toggle-switch"><i class="icon-bubbles5"></i></a></li>
          <li class="dropdown user-dropdown">
            <a href="index2.htm#" class="btn-user dropdown-toggle hidden-xs" data-toggle="dropdown"><img src="assets/images/faces/face1.png" class="img-circle user" alt=""/></a>
            <a href="index2.htm#" class="dropdown-toggle visible-xs" data-toggle="dropdown"><i class="icon-more"></i></a>
            <div class="dropdown-menu"> 
              <div class="text-center"><img src="assets/images/faces/face1.png" class="img-circle img-70" alt=""/></div>
              <h5 class="text-center"><b>Hi! <?php echo $_SESSION['Username']; ?></b></h5>
              <ul class="more-apps">
                <li><a href="http://localhost/templates/penguin/material/user_profile_social.html"><i class="icon-profile"></i> My profile</a></li>
                <li><a href="index2.htm#"><i class="icon-envelop5"></i> Inbox <span class="badge badge-danger pull-right">4</span></a></li>
                <li><a href="http://localhost/templates/penguin/material/user_profile_social.html"><i class="icon-cogs"></i> Profile settings</a></li>
                <li><a href="http://localhost/templates/penguin/material/login_unlock.html"><i class="icon-lock5"></i> Lock screen</a></li>
              </ul>
              <div class="text-center"><a href="login_simple.htm" class="btn btn-sm btn-info"><i class="icon-exit3 i-16 position-left"></i> Logout</a></div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </header>


<!--sidebar-->
  <aside class="sidebar">
    <div class="left-aside-container">
      <div class="user-profile-container">
        <div class="user-profile clearfix">
          <div class="admin-user-thumb">
            <img src="assets/images/faces/face4.png" alt="admin" class="img-circle">
          </div>
          <div class="admin-user-info">
            <ul class="user-info">
              <li><a href="index2.htm#" class="text-semibold text-size-large"><?php echo $_SESSION['Username']; ?></a></li>
              <li><a href="index2.htm#"><small>LabTech Technician</small></a></li>
            </ul>
            <div class="logout-icon"><a href="<?php echo $logout; ?>"><i class="icon-exit2"></i></a></div>
          </div>
          
        </div>        
      </div>      
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active" id="tab-menu"><a href="index2.htm#menu" aria-controls="menu" role="tab" data-toggle="tab"><i class="icon-home2"></i></a></li>
        <li role="presentation" class="" id="tab-email"><a href="index2.htm#email" aria-controls="email" role="tab" data-toggle="tab"><i class="icon-envelope"></i></a></li>
        <li role="presentation" class="" id="tab-profile"><a href="index2.htm#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="icon-users2"></i></a></li>
        <li role="presentation" class="" id="tab-settings"><a href="index2.htm#settings" aria-controls="settings" role="tab" data-toggle="tab"><i class="icon-cog3"></i></a></li>
      </ul>
      
      <div class="tab-content">
      
      
        <div role="tabpanel" class="tab-pane active fadeIn" id="menu">
          <ul class="sidebar-accordion">
          
            <li class="list-title">Main</li>
            <li>
              <a href="index2.htm#"><i class="icon-display4"></i><span class="list-label"> Dashboards</span></a>
              <ul>
                <li><a href="#">Default</a></li>
                <li><a href="#">Technician</a></li>
                <li><a href="#">NOC</a></li>     
                <li><a href="#">Help Desk</a></li>
                <li><a href="#">Labtech Admin</a></li>           
              </ul>
            </li>


            
            <li class="list-title">Management</li>
            <li><a href="<?php echo $client; ?>"><i class="icon-address-book"></i> <span>Clients</span></a></li>
            <li><a href="<?php echo $comp; ?>"><i class="icon-display"></i> <span>Computers</span></a></li>
            <li><a href="#"><i class="icon-link"></i> <span>Groups</span></a>
                <ul>
                <li><?php echo $this->Html->link('All Groups', array('controller' => 'Groups', 'action' => 'index')); ?></li>
                <?php foreach ($navList as $group): ?>
                <li><?php echo $this->Html->link($group['Group']['Name'], array('controller' => 'Groups', 'action' => 'group', $group['Group']['GroupID'])); ?>
                
                
                </li>
                <?php endforeach; ?>
                </ul>
            </li>
            <li><a href="#"><i class="icon-search4"></i> <span>Searchs</span></a></li>            
            <li><a href="#"><i class="icon-warning"></i> <span>Alerts</span></a>
              <ul>
                <li><a href="#">Projects list</a></li>
                <li><a href="#">Project details</a></li>                             
              </ul>
            </li>
            <li class="list-title">Administration</li>
            <li><a href="#"><i class="icon-magazine"></i> <span>Templates</span></a></li>
            <li><a href="#"><i class="icon-users"></i> <span>Users</span></a></li>
            <li><a href="#"><i class="icon-cogs"></i> <span>Schedule</span></a></li>                              
                              

            
            
            
          </ul>
        </div>
        
        
        <div role="tabpanel" class="tab-pane email fade" id="email">
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <button type="button" class="btn bg-success btn-labeled btn-lg btn-block m-t-5" data-toggle="modal" data-target="#new-email"><b><i class="icon-pen-plus"></i></b> Compose new mail</button>
              <div class="email-buttons">
                <div class="row m-t-5">
                  <div class="col-xs-6 no-padding-left">
                    <button class="btn bg-primary btn-block btn-float btn-float-lg" type="button"><i class="icon-inbox"></i> <span>Inbox</span></button>
                    <button class="btn bg-success btn-block btn-float btn-float-lg" type="button"><i class="icon-inbox-alt"></i> <span>Sent</span></button>
                  </div>
                  
                  <div class="col-xs-6 no-padding-right">
                    <button class="btn bg-info btn-block btn-float btn-float-lg" type="button"><i class="icon-floppy-disk"></i> <span>Draft</span></button>
                    <button class="btn bg-danger btn-block btn-float btn-float-lg" type="button"><i class="icon-trash"></i> <span>Trash</span></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <ul class="menu-list m-t-10 m-b-20">
            <li class="list-title">Folders</li>
            <li><a href="index2.htm#"><i class="icon-home2"></i> Home <span class="badge badge-info">4</span></a></li>
            <li><a href="index2.htm#"><i class="icon-briefcase3"></i> Work <span class="badge badge-warning">16</span></a></li>
            <li><a href="index2.htm#"><i class="icon-files-empty2"></i> Documents</a></li>
            <li><a href="index2.htm#"><i class="icon-images2"></i> Images</a></li>
            <li><a href="index2.htm#"><i class="icon-flag7"></i> Flagged</a></li>           
          </ul>
          <h6 class="mt-20 text-uppercase text-semibold">Completeness stats</h6>
          <label>Disk space used <span>80%</span></label>
          <div class="progress progress-xxs">
            <div class="progress-bar progress-bar-danger" style="width: 80%">
              <span class="sr-only">80% Complete</span>
            </div>
          </div>
        </div>
        
        
        <div role="tabpanel" class="tab-pane profile fade" id="profile">
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="text-center">
                <img src="assets/images/faces/face4.png" class="img-responsive img-circle user-avatar" alt=""/>
                <h4 class="no-margin-bottom m-t-10">Hi! <?php echo $_SESSION['Username']; ?></h4>
                <div class="text-light text-size-small text-white">LabTech Administrator</div>              
              </div>
            </div>
          </div>
          <div class="row m-t-10 connect-buttons">
            <div class="col-xs-6 p-r-5">
              <button type="button" class="btn btn-block btn-info btn-rounded"><i class="icon-envelope position-left"></i> Contact</button>
            </div>
            <div class="col-xs-6 p-l-5">
              <div class="btn-group dropleft">
                <button type="button" class="btn btn-block btn-danger btn-rounded dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="icon-share3 position-left"></i>  Connect
                </button>
                <ul class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                <li><a href="index2.htm#"><i class="icon-comment-discussion"></i> Chat with user</a></li>
                <li><a href="index2.htm#"><i class="icon-phone-wave"></i> Call user</a></li>
                <li><a href="index2.htm#"><i class="icon-comments"></i> Send message</a></li>
                </ul>
              </div>              
            </div>
          </div>
          <div class="row m-t-20 followers text-muted">
            <div class="col-xs-6 text-center">
              <h3 class="text-semibold no-margin">400+</h3>
              <div>Connections</div>
            </div>
            <div class="col-xs-6 text-center">
              <h3 class="text-semibold no-margin">1200+</h3>
              <div>Servers</div>
            </div>
          </div>
          <div class="row m-t-10 users-online">
            <div class="col-xs-12">
              <div class="leftbar-heading text-semibold m-b-15">Users Online</div>
              <ul class="media-list">
                <li class="media">
                  <a href="index2.htm#" class="media-left"><img src="assets/images/faces/face5.png" class="img-sm img-circle" alt=""></a>
                  <div class="media-body">
                    <a href="index2.htm#" class="media-heading">Florence Douglas</a>
                    <span class="text-size-mini text-muted display-block">Online</span>
                  </div>
                  <div class="media-right media-middle">
                    <span class="status-mark bg-success"></span>
                  </div>
                </li>

                <li class="media">
                  <a href="index2.htm#" class="media-left"><img src="assets/images/faces/face6.png" class="img-sm img-circle" alt=""></a>
                  <div class="media-body">
                    <a href="index2.htm#" class="media-heading">Eugine Turner</a>
                    <span class="text-size-mini text-muted display-block">Busy</span>
                  </div>
                  <div class="media-right media-middle">
                    <span class="status-mark bg-danger-light"></span>
                  </div>
                </li>

                <li class="media">
                  <a href="index2.htm#" class="media-left"><img src="assets/images/faces/face7.png" class="img-sm img-circle" alt=""></a>
                  <div class="media-body">
                    <a href="index2.htm#" class="media-heading">Jacqueline Howell</a>
                    <span class="text-size-mini text-muted display-block">Online</span>
                  </div>
                  <div class="media-right media-middle">
                    <span class="status-mark bg-success"></span>
                  </div>
                </li>

                <li class="media">
                  <a href="index2.htm#" class="media-left"><img src="assets/images/faces/face8.png" class="img-sm img-circle" alt=""></a>
                  <div class="media-body">
                    <a href="index2.htm#" class="media-heading">Marilyn Romero</a>
                    <span class="text-size-mini text-muted display-block">Away</span>
                  </div>
                  <div class="media-right media-middle">
                    <span class="status-mark bg-warning-light"></span>
                  </div>
                </li>

                <li class="media">
                  <a href="index2.htm#" class="media-left"><img src="assets/images/faces/face9.png" class="img-sm img-circle" alt=""></a>
                  <div class="media-body">
                    <a href="index2.htm#" class="media-heading">Andrew Brewer</a>
                    <span class="text-size-mini text-muted display-block">Invisible</span>
                  </div>
                  <div class="media-right media-middle">
                    <span class="status-mark bg-grey-light"></span>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        
        
        <div role="tabpanel" class="tab-pane settings fade" id="settings">
          <div class="leftbar-heading m-b-5">GENERAL SETTINGS</div>
          <div class="row">
            <div class="col-xs-9">
              <p class="text-size-mini">Make calls to friends and family right from your account.</p>
            </div>
            <div class="col-xs-2">
              <div class="checkbox checkbox-switchery switchery-xs">            
                <label>
                  <input type="checkbox" class="switchery" checked="checked">             
                </label>
              </div>
            </div>
          </div>          
          <div class="leftbar-heading m-t-10 m-b-5">SECURITY SETTINGS</div>
          <div class="row">
            <div class="col-xs-9">
              <p class="text-size-mini">Get notified when someone else is trying to access your account.</p>
            </div>
            <div class="col-xs-2">
              <div class="checkbox checkbox-switchery switchery-xs">            
                <label>
                  <input type="checkbox" class="switchery" checked="checked">             
                </label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-9">
              <p class="text-size-mini">Use your phone when login as an extra layer of security.</p>
            </div>
            <div class="col-xs-2">
              <div class="checkbox checkbox-switchery switchery-xs">            
                <label>
                  <input type="checkbox" class="switchery">             
                </label>
              </div>
            </div>
          </div>          
        </div>
      </div>    
    </div>
  </aside>
  <!--/sidebar-->

<?php /*

OLD MENU 
<!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
				 <li <?php if ($active === 'dashboards') {
                echo "class='active'";
            } ?>><a href="<?php echo $dash; ?>"><i class="fa fa-dashboard"></i> Dashboard </a></li>
			<li <?php if ($active === 'computers') {
                echo "class='active'";
            } ?>><a href="<?php echo $comp; ?>"><i class="fa fa-desktop"></i> Computers </a></li>
			<li <?php if ($active === 'clients') {
                echo "class='active'";
            } ?>><a href="<?php echo $client; ?>"><i class="fa fa-user"></i> Clients</a></li>
			<li class='dropdown'><a href="#"><i class="fa fa-object-group"></i> Groups <span class="fa fa-chevron-down"></span></a>
						<?php
						  $navList = $this->requestAction(
							'groups/getNav'
						  );
						  
						?>
 					
						<ul class="nav child_menu">
						<li><?php echo $this->Html->link('All Groups', array('controller' => 'Groups', 'action' => 'index')); ?></li>
						<?php foreach ($navList as $group): ?>
							  <li><?php echo $this->Html->link($group['Group']['Name'], array('controller' => 'Groups', 'action' => 'group', $group['Group']['GroupID'])); ?>
							  
							  
							  </li>
						<?php endforeach; ?>
						</ul>
			
			</li>
			
			<li><a href="#"><i class="fa fa-file-code-o"></i> Scripts</a></li>
			<li><a href="#"><i class="fa fa-file-text-o"></i> Reporting</a></li>
                  <li class='dropdown'><a><i class="fa fa-lock"></i> Admin <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">

                      <li><a href="index.html">User Management</a></li>
                      <li><a href="index2.html">Templates</a></li>
                      <li><a href="index3.html">Schedule</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Stuff</h3>
                <ul class="nav side-menu">
                  <li class="dropdown"><a><i class="fa fa-bug"></i> Bug Report<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">EDF's</a></li>
                      <li><a href="#">Dashboard</a></li>
                      <li><a href="#">Other?</a></li>>
                    </ul>
                  </li>
                    </ul>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->
			
			            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="fa fa-gear" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="fa fa-desktop" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="fa fa-lock" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="fa fa-power-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>
<!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav class="" role="navigation">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt=""><?php echo $this->Session->read('Username'); ?><small>- <?php echo $this->Session->read('Email'); ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><?php echo $this->Html->link("Edit Profile",
                            array('controller' => 'Users', 'action' => 'profile',
                        $_SESSION['Userid'])); ?></li>
                    <li><i class="fa fa-sign-out pull-right"></i><?php echo $this->Html->link("Logout",
                            array('controller' => 'Users', 'action' => 'logout')); ?></li>
                  </ul>
                </li>
                   
                  
                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
<?php 
*/
?>
