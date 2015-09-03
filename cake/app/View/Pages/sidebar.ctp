<?php

$this->extend('/Pages/home');

$this->start('sidebar');

?><!-- Sidebar Start -->
				  <div class='sidebar'>

				  <!-- Logo Start -->
				  <a href='index.php'>
					<div class='logo-container' id='step1'>
					<?php $this->Html->image('testimg.png' );?>
					</div>
				  </a>
				  <!-- Logo End -->

				  <!-- Sidebar User Profile Start -->
				  <div class='sidebar-profile'>
					<div class='user-avatar'>
					<i class='fa fa-user fa-4x'></i>
					</div>
					<div class='user-info'>
					 <a href='#'><?php echo $this->Session->read('Username');?></a>
					</div>
				  </div>

				  <div class='responsive-menu'>
					<a href='#'><i class='fa fa-bars'> test</i></a>
				  </div>
				  <!-- Sidebar User Profile End -->

				  <!-- Menu Start -->
				  	<ul class='menu' style='text-align: center; font: #fff;'>
					<li><span class='menu-ucon'></span>
					<a href='#'><span class='menu-text'>Core</span></a>
					</li>
					</ul>
				  <ul class='menu'>
					<li class='lightblue'>
					  <a href='index.php'>
						<span class='menu-icon'><i class='fa fa-home'></i></span>
						<span class='menu-text'>Dashboard</span>
					  </a>
					</li>
					<li class='parent lightyellow'>
					  <a href='support.html'>
						<span class='menu-icon'><i class='fa fa-users'></i></span>
						<span class='menu-text'>Support Center</span>
					  </a>
					  <ul class='child'>
						<li><a href='index.php?page=tickets'>Ticket Archive</a></li>
						<li><a href='tickets.php'>Ticket Response</a></li>
					  </ul>
					</li>
					</ul>
					<ul class='menu' style='text-align: center; font: #fff;'>
					<li><span class='menu-ucon'></span>
					<a href='#'><span class='menu-text'>Modules</span></a>
					</li>
					</ul>
					<ul class='menu'>
					<li><?php echo $this->Html->link( "Logout" , array('action' => 'logout') ) ; ?> </li>
					</ul>
			</ul>
			</div>
			<?php $this->end(); ?>