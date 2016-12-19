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
        <div class="pageicon"><span class="iconfa-hospital"></span></div>
        <div class="pagetitle">
            <h5>LabTech</h5>
            <h1>Client Listing</h1>
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

                                    <h4 class="widgettitle">Client List</h4>
                                    <div class=' dataTables_wrapper'
                                         <div class="panel-body ">
                                            <div id="dyntable_length" class="dataTables_length"><label>Show <select size="1" name="dyntable_length" aria-controls="dyntable"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div>
                                            <div class="dataTables_filter" id="dyntable_filter"><label>Search: <input type="text" aria-controls="dyntable"></label></div>

                                            <table class='table responsive table-striped table-bordered dataTable'>
                                                <thead>
                                                    <tr>
                                                        <th><?php echo $this->Paginator->sort('ClientID'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('Name'); ?></th>
                                                        <th>Address</th>
                                                        <th>Computers</th>
                                                        <th>Servers</th>
                                                        <th>Average Score</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($client as $cscore): ?>
                                                        <tr>
                                                            <td><?php echo $this->Html->link($cscore['Client']['ClientID'], array('controller' => 'Clients', 'action' => 'client', $cscore['Client']['ClientID']), $cscore['plugin_cw_clientmapping']['CWCompanyRecID']); ?> </td>
                                                            <td><?php echo $this->Html->link($cscore['Client']['Name'], array('controller' => 'Clients', 'action' => 'client', $cscore['Client']['ClientID'], $cscore['plugin_cw_clientmapping']['CWCompanyRecID'])); ?> </td>
                                                            <td><?php echo $cscore['Client']['Address1']; ?> <?php echo $cscore['Client']['Address2']; ?> - <?php echo $cscore['Client']['City']; ?> , <?php echo $cscore['Client']['State']; ?> </td>
                                                            <td> I DONT KNOW HOW TO DO THIS YET </td>
                                                            <td> OR THIS ONE </td>
                                                            <td><?php echo $cscore['Client']['Score']; ?></td>

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

<?php print_r($client); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

