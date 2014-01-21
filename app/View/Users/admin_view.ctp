<div id="admin-content" style="padding: 20px;">
<div class="pages form">

<h2>Manage Users</h2>
<div class="groups form">

    Firstname :  <?php echo h($user['User']['first_name']); ?> <br/>
    Lastname :   <?php echo h($user['User']['last_name']); ?> <br/>
    Email Address :   <?php echo h($user['User']['email_address']); ?> <br/>
    Phone :   <?php echo h($user['User']['phone']); ?><br/>
    Address :  <?php echo h($user['User']['address1']); ?><br/>
    City :   <?php echo h($user['User']['city']); ?> <br/>
    State : <?php echo h($user['User']['state']); ?> <br/>
    Zip : <?php echo h($user['User']['zip']); ?><br/>
    Country : <?php echo h($user['User']['country']); ?> <br/>
<br/>

</div>


</div>
    <br/>
    <br/>
<?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?>
</div>




