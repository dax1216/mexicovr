
<div id="admin-content" style="padding: 20px;">
<div class="pages form">

<h2>Manage Users</h2>
<div class="groups form">
<?php echo $this->Form->create('User');?>

    Firstname : <?php echo $this->Form->input('first_name',array('label' => '')); ?> <br/>
    Lastname : <?php echo $this->Form->input('last_name',array('label' => '')); ?> <br/>
    Email Address : <?php echo $this->Form->input('email_address',array('label' => '')); ?> <br/>
    Phone : <?php echo $this->Form->input('phone',array('label' => '','error' => array( 'attributes' => array( 'class' => 'label label-important' ) ))); ?> <br/>
    Adress : <?php echo $this->Form->input('address',array('label' => '','error' => array( 'attributes' => array( 'class' => 'label label-important' ) ))); ?> <br/>
    City : <?php echo $this->Form->input('city',array('label' => '','error' => array( 'attributes' => array( 'class' => 'label label-important' ) ))); ?> <br/>
    State : <?php echo $this->Form->input('state',array('label' => '','options' => $this->Geography->stateList(array('outside' => 'Outside US')), 'empty' => 'Select State', 'error' => array( 'attributes' => array( 'class' => 'label label-important' ) ))); ?> <br/>
    Zip : <?php echo $this->Form->input('zip',array('label' => '','attributes' => array( 'class' => 'label label-important' ) )); ?> <br/>
    Country : <?php echo $this->Form->input('country',array('label' => '','options' => $this->Geography->countryList(), 'empty' => 'Select Country', 'default' => 'US', 'error' => array( 'attributes' => array( 'class' => 'label label-important' ) ))); ?> <br/>
<br/>
<?php   echo $this->Form->submit( __('Update'), array('class' => 'btn btn-primary')) ?>
<?php   echo $this->Form->end();?>
</div>


</div>
    <br/>
    <br/>
<?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?>
</div>



