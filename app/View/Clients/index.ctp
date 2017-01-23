<!-- BEGIN PAGE CONTENT -->
    <section class="main-container">
            <!--Page Header-->
            <div class="header">
                <div class="header-content">
                    <div class="page-title"><i class="icon-display4"></i> Client List</div>
                    <ul class="breadcrumb">
                        <li><a href="index.htm">Home</a></li>
                        <li><a href="index2.htm#">Clients</a></li>
                    </ul>                   
                </div>
            </div>      
            <!--/Page Header-->
                 
                 <!-- /top tiles -->
        <div class="container-fluid page-content">
                        
            <div class="panel panel-flat">
                                <div class="panel-heading">
                                    <h5 class="panel-title"><i class='icon-display4'></i> Client Listings</h5>               
                                </div>

                                <div class="panel-body">
                                   This shows all clients you have access to. 
                                </div>
                                
                                <div class="table-responsive">
                                    <table class="table table-togglable table-hover default footable-loaded footable">
                                        <thead>
                                            <tr class='bg-slate'>                            
                                                <th data-toggle="true" class="footable-visible footable-first-column"><?php echo $this->Paginator->sort('ClientID'); ?></th>
                                                <th data-hide="phone" class="footable-visible"><?php echo $this->Paginator->sort('Name'); ?></th>
                                                <th data-hide="phone,tablet" class="footable-visible">Address</th>
                                                <th data-hide="phone,tablet" class="footable-visible">Computers</th>
                                                <th data-hide="phone,tablet" class="footable-visible">Servers</th>
                                                <th data-hide="phone,tablet" class="footable-visible">Average Health</th>
                                                <th style="width: 30px;" class="text-center footable-visible footable-last-column">Actions</th>
                                            </tr>
                                        </thead>
                                                <tbody>
                                                    <?php foreach ($client as $cscore): ?>
                                                        <tr>
                                                            <td class="footable-visible footable-first-column"><span class="footable-toggle"></span><?php echo $this->Html->link($cscore['Client']['ClientID'], array('controller' => 'Clients', 'action' => 'client', $cscore['Client']['ClientID']), $cscore['plugin_cw_clientmapping']['CWCompanyRecID']); ?> </td>
                                                            <td class="footable-visible"><?php echo $this->Html->link($cscore['Client']['Name'], array('controller' => 'Clients', 'action' => 'client', $cscore['Client']['ClientID'], $cscore['plugin_cw_clientmapping']['CWCompanyRecID'])); ?> </td>
                                                            <td class="footable-visible"><?php echo $cscore['Client']['Address1']; ?> <?php echo $cscore['Client']['Address2']; ?> - <?php echo $cscore['Client']['City']; ?> , <?php echo $cscore['Client']['State']; ?> </td>
                                                            <td class="footable-visible"> I DONT KNOW HOW TO DO THIS YET </td>
                                                            <td class="footable-visible"> OR THIS ONE </td>
                                                            <td class="footable-visible"><?php echo $cscore['Client']['Score']; ?></td>
                                                            <td class="text-center footable-visible footable-last-column">
                                                                <ul class="icons-list">                 
                                                                    <li class="dropdown">
                                                                        <a href="tables_responsive.htm#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                                        <ul class="dropdown-menu dropdown-menu-right">                          
                                                                            <li><a href="#"><i class="icon-pencil6"></i> Edit</a></li>
                                                                            <li><a href="#"><i class="icon-trash"></i> Delete</a></li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </td>

                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>

                                            </table><br>
                                           <div>
                        <?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}'))); ?>
                        </div>
                        <div class='text-right'>
                            <ul class="pagination pagination-separated">
                                <li><?php echo $this->Paginator->prev(__('<'), array(), null, array('class' => 'paginate_button_disabled')); ?></li>
                                <?php echo $this->Paginator->numbers(array('separator' => '', 'currentClass' => 'active', 'tag'=>'li')); ?>
                                <li><?php echo $this->Paginator->next(__('>'), array(), null, array('class' => '')); ?></li>

                            </ul>
                        </div>
                    </div>

                    </div></div></section>

