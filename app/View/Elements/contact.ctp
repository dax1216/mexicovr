<div class="message" id="contact-wrapper">
    <div class="form">
         <?php echo $this->Form->create('Property', array('action' => 'contact_owner', 'default'=>false)); ?>
            <?php echo $this->Form->input('property_id', array('type'=>'hidden', 'value'=>$property_id)); ?>
            <div class="left">
                <label>First Name</label>
                <?php echo $this->Form->input('first_name', array('label' => false, 'div' => false)); ?>
                <label>Email Address</label>
                <?php echo $this->Form->input('email_address', array('label' => false, 'div' => false)); ?>
                <label>Home Phone</label>
                <?php echo $this->Form->input('home_phone', array('label' => false, 'div' => false)); ?>

            </div>
            <div class="right">
                <label>Last Name</label>
                <?php echo $this->Form->input('last_name', array('label' => false, 'div' => false)); ?>
                <label>Re-Enter Email Address</label>
                <?php echo $this->Form->input('reenter_email_address', array('label' => false, 'div' => false)); ?>
            </div>
            <div class="clear"></div>
            <label>Comments and questions</label>
            <?php echo $this->Form->input('comments', array('label' => false, 'div' => false, 'type'=>'textarea')); ?>
            <span class="sub"><input type="submit" class="btnSub" value="SEND MESSAGE" /></span>
        <?php echo $this->Form->end(); ?>
    </div><!-- form -->
</div><!-- message -->