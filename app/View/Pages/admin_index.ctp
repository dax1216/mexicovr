
<div id="admin-content">
    <div id="contact" class="listing">
        <h1 class="title">Manage Pages</h1>
        <?php if($pages){ ?>
        <div class="pages index">
            <table id="mytable" cellpadding="0" cellspacing="0">
                <tr>
                    <th><?php echo $this->Paginator->sort('id'); ?></th>
                    <th><?php echo $this->Paginator->sort('title'); ?></th>
                    <th><?php echo $this->Paginator->sort('updated'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
                <?php foreach ($pages as $page): ?>
                    <tr>
                        <td><?php echo h($page['Page']['id']); ?>&nbsp;</td>
                        <td><?php echo h($page['Page']['title']); ?>&nbsp;</td>
                        <td><?php echo h($page['Page']['updated']); ?>&nbsp;</td>
                        <td class="actions">
                        <?php echo $this->Html->link(__('View'), array('action' => 'view', $page['Page']['id'])); ?>
                       

                          <a class="home" href="<?php echo $this->webroot; ?>admin/pages/edit/<?php echo h($page['Page']['id']); ?>">Edit</a>

                        <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $page['Page']['id']), null, __('Are you sure you want to delete # %s?', $page['Page']['id'])); ?>
                    </td>
                </tr>
                
            <?php endforeach; ?>
            </table>
            <?php   echo $this->element('paginate') ?>
        </div>
        <?php }else{ echo "No pages found!";} ?>


    </div>

</div>
