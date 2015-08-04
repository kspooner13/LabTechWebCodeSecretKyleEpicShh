<div class="header">
        <div class="logo">
            <a href=""><?php echo $this->Html->image('aitlogo.png'); ?></a>
        </div>
        <div class="headerinner">
            <ul class="headmenu">
                <li class="odd">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="count">1</span>
                        <span class="head-icon head-message"></span>
                        <span class="headmenu-label">Messages</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="nav-header">Messages</li>
                        <li><a href=""><span class="icon-envelope"></span> New message from <strong>Spooner</strong> <small class="muted"> - 19 hours ago</small></a></li>
                    </ul>
                </li>
                <li>
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#">
                    <span class="count">1</span>
                    <span class="head-icon head-users"></span>
                    <span class="headmenu-label">New Users</span>
                    </a>
                    <ul class="dropdown-menu newusers">
                        <li class="nav-header">New Users</li>
                        <li>
                            <a href="">
                                <strong>Kyle Spooner</strong>
                                <small>April 20, 2013</small>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="odd">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#">
                    <span class="count">1</span>
                    <span class="head-icon head-bar"></span>
                    <span class="headmenu-label">Statistics</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="nav-header">Statistics</li>
                        <li><a href=""><span class="icon-align-left"></span> New Reports from <strong>Workstations</strong> <small class="muted"> - 19 hours ago</small></a></li>
                        <li><a href=""><span class="icon-align-left"></span> New Statistics from <strong>Users</strong> <small class="muted"> - 2 days ago</small></a></li>
                        <li class="viewmore"><a href="">View More Statistics</a></li>
                    </ul>
                </li>
                <li class="right">
                    <div class="userloggedinfo">
                            <?php echo $this->Html->image('014.jpg'); ?>
                        <div class="userinfo">
                            <h5><?php echo $this->Session->read('Username'); ?><small>- <?php echo $this->Session->read('Email'); ?></small></h5>
                            <ul>
                                <li><a href="">Edit Profile</a></li>
                                <li><a href="">Account Settings</a></li>
                                <li><?php echo $this->Html->link("Logout", array('controller' => 'Users', 'action' => 'logout') );?></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul><!--headmenu-->
        </div>
    </div>
    <script>
         jQuery(document).ready(function() {
        	jQuery('.leftmenu .dropdown > a').click(function(){
		if(!jQuery(this).next().is(':visible'))
			jQuery(this).next().slideDown('fast');
		else
			jQuery(this).next().slideUp('fast');	
		return false;
	});
         });</script>
    
    
    <?php
    $active = $this->params['controller'];
    ?>
    <div class="leftpanel">
        
        <div class="leftmenu">        
            <ul class="nav nav-tabs nav-stacked">
            	<li class="nav-header">Navigation</li>
                <li <?php if ($active === 'dashboards') { echo "class='active'"; } ?>><?php echo $this->Html->link("Dashboard", array('controller' => 'dashboards', 'action' => 'index') ); ?></li>
                <li><a href="" ><span class="iconfa-hand-up"></span> Tickets</a></li>
                <li class="dropdown"><a href='#'><span class="iconfa-pencil"></span> Clients</a>
                    <ul>
                        <li><a href='#'>test</a></li>
                        <li><a>test2</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href=""><span class="iconfa-briefcase"></span> Computers</a>

                </li>
                <li class='dropdown <?php if ($active === 'HealthCheck') { echo "active"; } ?>'><a href='#'>HealthCheck</a> <?php //echo $this->Html->link("Health Check", array('controller' => 'HealthCheck', 'action' => 'index') ) ; ?>
                    <ul <?php if ($active === 'HealthCheck') { echo "style='display: block;'"; } ?>>
                        <li <?php if ($this->params['action'] === 'index') { echo "class='active'"; } ?>><?php echo $this->Html->link("Home", array('controller' => 'HealthCheck', 'action' => 'index')); ?> </li>
                        <li <?php if ($this->params['action'] === 'groupTeam') { echo "class='active'"; } ?>><?php echo $this->Html->link("Teams", array('controller' => 'HealthCheck', 'action' => 'groupTeam')); ?> </li>
                    </ul>
                </li>


            </ul>
        </div><!--leftmenu-->
        
    </div><!-- leftpanel -->