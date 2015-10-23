<div class="rightpanel">

    <ul class="breadcrumbs">
        <li><a href="dashboard.html"></a> <span class="separator"></span></li>
        <li>Dashboard ></li>
        <li>Clients</li>
    </ul>

    <div class="pageheader">
        <form action="results.html" method="post" class="searchbar">
            <input type="text" name="keyword" placeholder="To search type and hit enter..." />
        </form>
        <div class="pageicon"><span class="iconfa-desktop"></span></div>
        <div class="pagetitle">
            <h5>LabTech</h5>
            <h1>Computer Listing</h1>
        </div>
    </div><!--pageheader-->

    <div class="maincontent">
        <div class="maincontentinner">
            <div class="row-fluid">
                <div class="page-content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-lg-12">


                                <div class="panel panel-info panel-square panel-no-border">

                                    <h4 class="widgettitle">Computer List</h4>
                                    <div class=' dataTables_wrapper'
                                         <div class="panel-body ">
                                            <div id="dyntable_length" class="dataTables_length"><label>Show <select size="1" name="dyntable_length" aria-controls="dyntable"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div>
                                            <div class="dataTables_filter" id="dyntable_filter"><label>Search: <input type="text" aria-controls="dyntable"></label></div>

                                            <table class='table responsive table-striped table-bordered dataTable'>
                                                <thead>
                                                    <tr>
                                                        <th><?php echo $this->Paginator->sort('ComputerID'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('Name'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('ClientID'); ?></th>
                                                        <th>Logged in User</th>
                                                        <th>Operating System</th>
                                                        <th>IP Address</th>
                                                        <th>Computer Type</th>
                                                      
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($computer as $cscore): ?>
                                                        <tr>
                                                            <td><?php echo $this->Html->link($cscore['Computer']['ClientID'], array('controller' => 'Computer', 'action' => 'computer', $cscore['Computer']['ComputerID'])); ?> </td>
                                                            <td><?php echo $cscore['Computer']['Name']; ?> </td>
                                                            <td><?php echo $cscore['Computer']['ClientID']; ?> </td>
                                                            <td><?php echo $cscore['Computer']['Username']; ?> </td>
                                                            <td><?php echo $cscore['Computer']['OS']; ?> </td>
                                                            <td><?php echo $cscore['Computer']['LocalAddress']; ?> </td>
                                                            <td><?php echo $cscore['Computer']['BiosName']; ?> </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>

                                            </table><br>
                                            <div class='dataTables_length'>

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
                </div>
            </div>
        </div>
    </div>
</div>

</div>

