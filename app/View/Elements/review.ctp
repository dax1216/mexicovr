<?php 
    $this->Js->JqueryEngine->jQueryObject = '$j';
    echo $this->Html->scriptBlock(
        'var $j = jQuery.noConflict();',
        array('inline' => false)
    ); // Tell jQuery to go into noconflict mode
    $data = $this->Js->get('#ReviewAddForm')->serializeForm(array('isForm' => true, 'inline' => true));
    //var_dump($data);
    $this->Js->get('#ReviewAddForm')->event(
            'submit', 
            $this->Js->request(
                    array('controller' => 'reviews', 'action' => 'add'), array(
                'update' => '#UserInfoDiv',
                'data' => $data,
                'async' => true,
                'dataExpression' => true,
                'type' => 'json',
                'method' => 'POST'
                    )
            )
    );
?>
<div class="message">
    <div class="form">
        <div id="UserInfoDiv">test</div>
        <?php echo $this->Form->create('Review', array('action' => 'add', 'default'=>false)); ?>
        <input type="hidden" value="<?php echo $property_id; ?>"/>
        <div class="left">
            <label>First Name</label>
            <?php echo $this->Form->input('first_name', array('label' => false, 'div' => false)); ?>
            <label>Email Address</label>
            <?php echo $this->Form->input('email_address', array('label' => false, 'div' => false)); ?>
            <span class="dateholder">
                <label>Arrival Date</label>
                <input type="text" class="datefrom" id="arrive" readonly="readonly" name="data[Review][arrival]" />
            </span>
        </div>
        <div class="right">
            <label>Last Name</label>
            <?php echo $this->Form->input('last_name', array('label' => false, 'div' => false)); ?>
            <label>Re-Enter Email Address</label>
            <?php echo $this->Form->input('confirm_email_address', array('label' => false, 'div' => false)); ?>
            <span class="dateholder">
                <label>Departure Date</label>
                <input type="text" class="dateto" id="depart" readonly="readonly" name="data[Review][departure]"/>
            </span>
        </div>
        <div class="clear"></div>
        <label>Guest Review</label>
        <?php echo $this->Form->input('review', array('label' => false, 'div' => false, 'type' => 'textarea')); ?>
        <label>Over-all Experience</label><img class="star" src="<?php echo $this->webroot; ?>images/stars.png" />
        <span class="sub">
                <input type="submit" class="btnSub" value="SUBMIT" />
        </span>
        <?php echo $this->Form->end(); ?>
        
        
    </div><!-- form -->
</div><!-- message -->