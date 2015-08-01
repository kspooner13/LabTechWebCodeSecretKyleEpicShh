<div class="rightpanel">

    <ul class="breadcrumbs">
        <li><a href="dashboard.html"></a> <span class="separator"></span></li>
        <li>Dashboard ></li>
        <li>Health Check</li>
    </ul>

    <div class="pageheader">
        <form action="results.html" method="post" class="searchbar">
            <input type="text" name="keyword" placeholder="To search type and hit enter..." />
        </form>
        <div class="pageicon"><span class="iconfa-hospital"></span></div>
        <div class="pagetitle">
            <h5>LabTech Health Check Plugin</h5>
            <h1>Health Check</h1>
        </div>
    </div><!--pageheader-->

    <div class="maincontent">
        <div class="maincontentinner">

            <div class="row">
                <div class="col-lg-12">


                    <div class="panel panel-info panel-square panel-no-border text-center">

                        <h4 class="widgettitle">Health Check By Client</h4>
                           
                        <div class="panel-body">
                                                        <div class='col-sm-6'>
                           
 <?php echo $this->Paginator->counter(array('format'=> __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}'))); ?>
                            </div>
                            <div class='col-sm-6'>
                                <div class='btn btn-info' style='color: white;'><?php echo $this->Paginator->prev(__('< Previous'), array(), null, array('class' => 'disabled')); ?></div>
                                <?php echo $this->Paginator->numbers(array('separator' => ' | ')); ?>
                                <div class='btn btn-info'><?php echo $this->Paginator->next(__('Next >'), array(), null, array('class' => 'btn-primary')); ?></div>
                            
                            
                            
                            </div>
                            <table class='table responsive table-striped table-bordered'>
                                <thead>
                                    <tr>
                                        <th><?php echo $this->Paginator->sort('Client_Name'); ?></th>
                                        <th><?php echo $this->Paginator->sort('Team_Assignment'); ?></th>
                                        <th>Anti-Virus</th>
                                        <th>Disk</th>
                                        <th>Intrusion</th>
                                        <th>Usability</th>
                                        <th>Services</th>
                                        <th>Updates</th>
                                        <th>Event Log</th>
                                        <th>Average Score</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($clientScores as $cscore): ?>
                                        <tr>
                                            <td><?php echo $this->Html->link($cscore['HealthCheck']['Client_Name'], array('controller' => 'HealthCheck', 'action' => 'client', $cscore['HealthCheck']['ClientID'])); ?> </td>
                                            <td><?php echo $this->Html->link($cscore['HealthCheck']['Team_Assignment'], array('controller' => 'HealthCheck', 'action' => 'team', $cscore['HealthCheck']['Team_Assignment'])); ?> </td>
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
                                
                            </table><br>
                            <div class='col-sm-6'>
                           
 <?php echo $this->Paginator->counter(array('format'=> __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}'))); ?>
                            </div>
                            <div class='col-sm-6'>
                                <div class='btn btn-info' style='color: white;'><?php echo $this->Paginator->prev(__('< Previous'), array(), null, array('class' => 'disabled')); ?></div>
                                <?php echo $this->Paginator->numbers(array('separator' => ' | ')); ?>
                                <div class='btn btn-info'><?php echo $this->Paginator->next(__('Next >'), array(), null, array('class' => 'btn-primary')); ?></div>
                            
                            
                            
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

</div>