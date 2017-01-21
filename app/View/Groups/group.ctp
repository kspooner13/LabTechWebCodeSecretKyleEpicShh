<?php
//CLIENT PAGE FANCY LIKE
?>
<div class="right_col" role="main">
    <div class="maincontent">
        <div class="maincontentinner">
            <div class="row-fluid">
                <div class="page-content">						
                    <div class="container-fluid">
                         <div class="col-md-12 tab-section">
						 <?php //print_r($group);?>
						 <div class='x_panel'>
							  <div class="x_title">
								<h2><i class="fa fa-bars"></i> <?php echo $group['Group']['Name']; ?> <small>Id: <?php echo $group['Group']['GroupID']; ?></small></h2>
								<ul class="nav navbar-right panel_toolbox">
								  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
								  </li>
								</ul>
								<div class="clearfix"></div>
							  </div>
							  <div class='x_content'>
								 <div class="tabs tabs-style-iconbox">
									<nav>
										<ul>
											<li class="tab-current"><a href="#tab_content1" id="main-tab" role="tab" data-toggle="tab" aria-expanded="true"><i class='tab-icon fa fa-home'></i><span>Main</span></a></li>
											<li><a href="#tab_content2" role="tab" id="computers-tab" data-toggle="tab" aria-expanded="false"><i class='tab-icon fa fa-desktop'></i><span>Computers</span></a></li>
											<li><a href="#tab_content3" role="tab" id="network-tab" data-toggle="tab" aria-expanded="false"><i class='tab-icon fa fa-sitemap'></i><span>Network Devices</span></a></li>
											<li><a href="#tab_content4" role="tab" id="contacts-tab" data-toggle="tab" aria-expanded="false"><i class='tab-icon fa fa-users'></i><span>Contacts</span></a></li>
											<li><a href="#tab_content5" role="tab" id="information-tab" data-toggle="tab" aria-expanded="false"><i class='tab-icon fa fa-info-circle'></i><span>Information</span></a></li>
											<li><a href="#tab_content6" role="tab" id="groupstats-tab" data-toggle="tab" aria-expanded="false"><i class='tab-icon fa fa-bar-chart'></i><span>Group Stats</span></a></li>
											<li><a href="#tab_content7" role="tab" id="Managed-tab" data-toggle="tab" aria-expanded="false"><i class='tab-icon fa fa-file-text'></i><span>Managed Service Templates</span></a></li>
											<li><a href="#tab_content8" role="tab" id="standards-tab" data-toggle="tab" aria-expanded="false"><i class='tab-icon fa fa-hospital'></i><span>Standards & Health</span></a></li>									
										</ul>
									</nav>
										<div class="myTabContent tab-content tab-group-wrap">
										
											<div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="main-tab">
											  <p>I am the main tab, I do main things</p>
											</div>
                      <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="computers-tab">
                        <p>"Beep Boop" - Computer</p>
                      </div>
                      <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="Network-tab">
                        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher
                        synth. Cosby sweater eu banh mi, qui irure terr.</p>
                      </div>
										</div><!-- /content -->
								</div>
								</div>
						</div>

                    </div>
<div class="x_panel">

                  <div class="x_content">


                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Home</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Profile</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Profile</a>
                        </li>
                      </ul>
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                          <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher
                            synth. Cosby sweater eu banh mi, qui irure terr.</p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                          <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                            booth letterpress, commodo enim craft beer mlkshk aliquip</p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                          <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                            booth letterpress, commodo enim craft beer mlkshk </p>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>


                </div>

            </div>

        </div>

    </div>
</div>

