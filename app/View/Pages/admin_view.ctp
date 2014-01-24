
<div id="admin-content" style="padding: 25px;">
<div class="pages form">

Title: <?php echo h($page['Page']['title']); ?> <br/>
Content: <?php echo $page['Page']['content']; ?> <br/>
Create: <?php echo h($page['Page']['created']); ?> <br/>
Updated: <?php echo h($page['Page']['updated']); ?>

    
</div>
    <br/>
    <br/>
<?php echo $this->Html->link(__('List Pages'), array('action' => 'index')); ?> 
</div>
