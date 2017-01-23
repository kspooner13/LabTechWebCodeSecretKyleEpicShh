<!-- BEGIN PAGE CONTENT -->
    <section class="main-container">
            <!--Page Header-->
            <div class="header">
                <div class="header-content">
                    <div class="page-title"><i class="icon-display4"></i> Computer List</div>
                    <ul class="breadcrumb">
                        <li><a href="index.htm">Home</a></li>
                        <li><a href="index2.htm#">Computers</a></li>
                    </ul>                   
                </div>
            </div>      
            <!--/Page Header-->
                 
                 <!-- /top tiles -->

        <div class="container-fluid page-content">
                        
<div class="panel panel-flat">
                    <div class="panel-heading">
                        <h5 class="panel-title"><i class='icon-display4'></i> Computer Listings</h5>               
                    </div>

                    <div class="panel-body">
                       This shows all computers you have access to. 
                    </div>
                    
                    <div class="table-responsive">
                        <table class="table table-togglable table-hover default footable-loaded footable">
                            <thead>
                                <tr class='bg-slate'>                            
                                    <th data-toggle="true" class="footable-visible footable-first-column"><?php echo $this->Paginator->sort('Name'); ?></th>
                                    <th data-hide="phone" class="footable-visible"><?php echo $this->Paginator->sort('ClientID'); ?></th>
                                    <th data-hide="phone,tablet" class="footable-visible">Logged in User</th>
                                    <th data-hide="phone,tablet" class="footable-visible">Operating System</th>
                                    <th data-hide="phone,tablet" class="footable-visible">IP Address</th>
                                    <th data-hide="phone,tablet" class="footable-visible">Type</th>
                                    <th style="width: 30px;" class="text-center footable-visible footable-last-column">Actions</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <?php foreach ($computer as $cscore): ?>
                                <tr>                            
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span><?php echo $this->Html->link($cscore['Computer']['Name'], array('controller' => 'computers', 'action' => 'computer', 'id' => $cscore['Computer']['ComputerID'])); ?></td>
                                    <td class="footable-visible"><?php echo $cscore['clients']['Name']; ?></td>
                                    <td class="footable-visible"><?php echo $cscore['Computer']['Username']; ?> </td>
                                    <td class="footable-visible"><a href="mailto:#"><?php echo $cscore['Computer']['OS']; ?></a></td>
                                    <td class="footable-visible"><?php echo $cscore['Computer']['LocalAddress']; ?></td>
                                    <td class="footable-visible"><span class="label label-success"><?php echo $cscore['Computer']['BiosName']; ?></span></td>
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
                        </table>
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
                </div>
                </div>
                </section>


                            <?php /*


                                <div class="panel panel-info panel-square panel-no-border">

                                    <h4 class="widgettitle">Computer List</h4>
                                    <div class=''>
                                         <div class="panel-body ">
                                            <div id="dyntable_length" class="dataTables_length"><label>Show <select size="1" name="dyntable_length" aria-controls="dyntable"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div>
                                            <div class="dataTables_filter" id="dyntable_filter"><label>Search: <input type="text" aria-controls="dyntable"></label></div>

                                            <table class='table responsive table-striped table-bordered dataTable'>
                                                <thead>
                                                    <tr>
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
                                                           <td><?php echo $this->Html->link($cscore['Computer']['Name'], array('controller' => 'computers', 'action' => 'computer', 'id' => $cscore['Computer']['ComputerID'])); ?> </td>
                                                            <td><?php echo $cscore['clients']['Name']; ?> </td>
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
*/
?>