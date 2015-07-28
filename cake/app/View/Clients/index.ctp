<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<section class='content'>
    <div id="container">
        	<div class='content-liquid-full'>
		<div id="content">
                    <div class='row header-bar' id='step2'>

  </div>
        <h2><?php echo __('Clients'); ?></h2>
        <table>
            <tr>
                <th><?php echo $this->Paginator->sort('id'); ?></th>
                <th><?php echo $this->Paginator->sort('name'); ?></th>
                <th><?php echo $this->Paginator->sort('last_date'); ?></th>
            </tr>
            <?php foreach ($Clients as $client): ?>
                <tr>
                    <td><?php echo $client['Client']['ClientID']; ?></td>
                    <td>
                        <?php
                        echo $this->Html->link($client['Client']['Name'], array('controller' => 'Clients', 'action' => 'view',
                            $client['Client']['ClientID']));
                        ?>
                    </td>
                    <td><?php echo $this->Time->nice($client['Client']
                            ['Last_Date']);
                    ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <?php echo $this->Paginator->counter(array('format' => __('Page
{:page} of {:pages}, showing {:current} records out of {:count}
total, starting on record {:start}, ending on {:end}'))); ?>
        <div>
            <?php
            echo $this->Paginator->prev(__('< previous'), array(), null, array('class' => 'prev disabled'));
            echo $this->Paginator->numbers(array('separator' => ''));
            echo $this->Paginator->next(__('next >'), array(), null, array('class' => 'next disabled'));
            ?>
        </div>
                </div>
                </div>
    </div>
    
</section>