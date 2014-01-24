<?php echo $this->Html->script(array('raty/lib/jquery.raty.min')); ?>
<div class="message" id="war-wrapper">
    <div class="form">
        <?php echo $this->Form->create('Review', array('action' => 'add', 'default'=>false)); ?>
        <?php echo $this->Form->input('property_id', array('type'=>'hidden', 'value'=>$property_id)); ?>
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
        <label>Over-all Experience</label><div id="score-demo"></div>
        <span class="sub">
                <input type="submit" class="btnSub" value="SUBMIT" />
        </span>
        <?php echo $this->Form->input('rate', array('type'=>'hidden')); ?>
        <?php echo $this->Form->end(); ?>
        
    </div><!-- form -->
</div><!-- message -->