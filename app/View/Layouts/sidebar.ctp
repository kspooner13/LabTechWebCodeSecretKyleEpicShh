<?php

$this->extend('/Pages/home');

$this->start('sidebar');

?><!-- Sidebar Start -->
				  <div class='sidebar col-md-3 left_col'>
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentellela Alela!</span></a>
            </div>
				  <!-- Logo Start -->
				  <a href='index.php'>
					<div class='logo-container' id='step1'>
					<?php $this->Html->image('testimg.png' );?>
					</div>
				  </a>
				  <!-- Logo End -->


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