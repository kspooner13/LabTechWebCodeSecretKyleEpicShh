<!-- BEGIN PAGE CONTENT -->
    <section class="main-container">
            <!--Page Header-->
            <div class="header">
                <div class="header-content">
                    <div class="page-title"><i class="icon-display4"></i> Group Edit Page</div>
                    <ul class="breadcrumb">
                        <li><a href="index.htm">Home</a></li>
                        <li><a href="index2.htm#">Groups</a></li>
                        <li><a href=""><?php echo $group['Group']['Name']; ?></a></li>
                    </ul>                   
                </div>
            </div>      

            <div class="panel panel-flat">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                    <?php echo $group['Group']['Name']; ?> <small>Id: <?php echo $group['Group']['GroupID']; ?></small>
                    </h4>       
                  </div>
                  <div class="panel-body">
                    <div class="tabbable">
                      <ul class="nav nav-tabs nav-tabs-highlight">
                        <li class="active"><a href="ui_elements.htm#right-icon-tab1" data-toggle="tab">Main <i class="icon-home position-right"></i></a></li>
                        <li><a href="ui_elements.htm#right-icon-tab2" data-toggle="tab">Computers <i class="icon-display position-right"></i></a></li>
                        <li><a href="ui_elements.htm#right-icon-tab3" data-toggle="tab">Network Devices <i class="icon-lan position-right"></i></a></li>   
                        <li><a href="ui_elements.htm#right-icon-tab4" data-toggle="tab">Contacts <i class="icon-user position-right"></i></a></li>   
                        <li><a href="ui_elements.htm#right-icon-tab5" data-toggle="tab">Information <i class="icon-info position-right"></i></a></li>   
                        <li><a href="ui_elements.htm#right-icon-tab6" data-toggle="tab">Group Stats <i class="icon-meter-slow position-right"></i></a></li>   
                        <li><a href="ui_elements.htm#right-icon-tab7" data-toggle="tab">Managed Services Templates <i class="icon-clipboard3 position-right"></i></a></li>   
                        <li><a href="ui_elements.htm#right-icon-tab8" data-toggle="tab">Standards & Health <i class="icon-height position-right"></i></a></li>            </ul>
                      <div class="tab-content">
                        <div class="tab-pane active" id="right-icon-tab1">
                          Add icon markup <code>after</code> tab nav text to display icons on the right side.
                        </div>
                        <div class="tab-pane" id="right-icon-tab2">
                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                        </div>
                        <div class="tab-pane" id="right-icon-tab3">
                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                        </div>
                        <div class="tab-pane" id="right-icon-tab4">
                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                        </div>
                        <div class="tab-pane" id="right-icon-tab5">
                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                        </div>
                        <div class="tab-pane" id="right-icon-tab6">
                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                        </div>
                        <div class="tab-pane" id="right-icon-tab7">
                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                        </div>
                        <div class="tab-pane" id="right-icon-tab8">
                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                        </div>
                      </div>
                    </div>  
                  </div>
                </div>


            <?php /*
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

*/ ?>