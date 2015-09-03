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


                    <div class="panel panel-info panel-square panel-no-border text-center">

                        <h4 class="widgettitle">Client List</h4>

                        <div class="panel-body ">
                            <div class='col-sm-6'>

                                <?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}'))); ?>
                            </div>
                            <div class='col-sm-6'>
                                <div class='btn btn-info' style='color: white;'><?php echo $this->Paginator->prev(__('< Previous'), array(), null, array('class' => 'disabled')); ?></div>
                                <?php echo $this->Paginator->numbers(array('separator' => ' | ')); ?>
                                <div class='btn btn-info'><?php echo $this->Paginator->next(__('Next >'), array(), null, array('class' => 'btn-primary')); ?></div>



                            </div>
                            <table class='table responsive table-striped table-bordered'>
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
                                            <td><?php echo $this->Html->link($cscore['Client']['ClientID'], array('controller' => 'Client', 'action' => 'client', $cscore['Client']['ClientID'])); ?> </td>
                                            <td><?php echo $this->Html->link($cscore['Client']['Name'], array('controller' => 'Client', 'action' => 'client', $cscore['Client']['Name'])); ?> </td>
                                            <td><?php echo $cscore['Client']['Address1']; ?> <?php echo $cscore['Client']['Address2']; ?> - <?php echo $cscore['Client']['City']; ?> , <?php echo $cscore['Client']['State']; ?> </td>
                                            <td> I DONT KNOW HOW TO DO THIS YET </td>
                                            <td> OR THIS ONE </td>
                                            <td><?php echo $cscore['Client']['Score']; ?></td>

                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>

                            </table><br>
                            <div class='col-sm-6'>

                                <?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}'))); ?>
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
        </div>
    </div>

</div>

