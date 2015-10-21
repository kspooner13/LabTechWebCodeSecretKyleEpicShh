<?php

//This is the team render for HealthCheck

//Lets render?

$teamGroup =  $teamScores[0]['HealthCheck']['Team_Assignment']; 
?>

<div class="rightpanel">

    <ul class="breadcrumbs">
        <li><a href="dashboard.html"></a> <span class="separator"></span></li>
        <li>Dashboard ></li>
        <li>Health Check ></li>
        <li><?php echo $teamScores[0]['HealthCheck']['Team_Assignment']; ?></li>
    </ul>

    <div class="pageheader">
        <form action="results.html" method="post" class="searchbar">
            <input type="text" name="keyword" placeholder="To search type and hit enter..." />
        </form>
        <div class="pageicon"><span class="iconfa-hospital"></span></div>
        <div class="pagetitle">
            <h5>LabTech Health Check Plugin - Team Listing</h5>
            <h1><?php echo $teamGroup; ?></h1>
        </div>
    </div><!--pageheader-->

    <div class="maincontent">
        <div class="maincontentinner">

            <div class="row">
                <div class="col-lg-12">


                    <div class="panel panel-info panel-square panel-no-border">

                        <h4 class="widgettitle">Health Check By Team</h4>
                           
                                    <div class=' dataTables_wrapper'
                                         <div class="panel-body ">
                                            <div id="dyntable_length" class="dataTables_length"><label>Show <select size="1" name="dyntable_length" aria-controls="dyntable"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div>
                                            <div class="dataTables_filter" id="dyntable_filter"><label>Search: <input type="text" aria-controls="dyntable"></label></div>

                            
                            </div>
                            <table class='table responsive table-striped table-bordered dataTable'>
                                <thead>
                                    <tr>
                                        <th><?php echo $this->Paginator->sort('Client_Name'); ?></th>
                                        <th><?php echo $this->Paginator->sort('Antivirus'); ?></th>
                                        <th><?php echo $this->Paginator->sort('Disk'); ?></th>
                                        <th><?php echo $this->Paginator->sort('Intrusion'); ?></th>
                                        <th><?php echo $this->Paginator->sort('Usability'); ?></th>
                                        <th><?php echo $this->Paginator->sort('Services'); ?></th>
                                        <th><?php echo $this->Paginator->sort('Updates'); ?></th>
                                        <th><?php echo $this->Paginator->sort('Event_Log'); ?></th>
                                        <th><?php echo $this->Paginator->sort('Avg_Score'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($teamScores as $cscore): ?>
                                        <tr>
                                            <td><?php echo $this->Html->link($cscore['HealthCheck']['Client_Name'], array('controller' => 'HealthCheck', 'action' => 'client', $cscore['HealthCheck']['ClientID'])); ?> </td>
                                            <td><?php echo $cscore['HealthCheck']['Antivirus']; ?> </td>
                                            <td><?php echo $cscore['HealthCheck']['Disk']; ?> </td>
                                            <td><?php echo $cscore['HealthCheck']['Intrusion']; ?> </td>
                                            <td><?php echo $cscore['HealthCheck']['Usability']; ?></td>
                                            <td><?php echo $cscore['HealthCheck']['Services']; ?></td>
                                            <td><?php echo $cscore['HealthCheck']['Updates']; ?></td>
                                            <td><?php echo $cscore['HealthCheck']['Event_Log']; ?></td>
                                            <td><?php echo $cscore['HealthCheck']['Avg_Score']; ?></td>

                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                
                            </table>                                            <div class='dataTables_length'>

                                                <?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}'))); ?>
                                            </div>
                                            <div class='dataTables_paginate paging_full_buttons'>
                                                <a tabindex='0' class='previous paginate_button'><?php echo $this->Paginator->prev(__('Previous'), array(), null, array('class' => 'paginate_button_disabled')); ?></a>
                                                <?php echo $this->Paginator->numbers(array('separator' => '', 'currentClass' => 'pageinate_active', 'class' => 'paginate_button')); ?>
                                                <a tabindex='0' class='next paginate_button'><?php echo $this->Paginator->next(__('Next'), array(), null, array('class' => '')); ?></a>



                                            </div>
                           
                            
                            
                            </div>
                        </div>
                    </div>
            </div>


                </div>
            </div>
        </div><?php echo $this->Js->writeBuffer(); ?>
    </div>

</div>