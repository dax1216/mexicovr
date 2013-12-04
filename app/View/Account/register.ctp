<div id="content">
    <div id="contact" class="members register">
        <h1 class="title">Please Register</h1>
        <div class="line"></div>

        <div class="form">
            <?php echo $this->Session->flash(); ?>
            <?php echo $this->Form->create(array('url' => '/account/register', 'autocomplete' => 'off', 'class' => 'form-signup')); ?>
            <div class="left">
                <label>First Name</label>
                <?php echo $this->Form->input('first_name', array('label' => false, 'div' => false)); ?>
                <label>Email Address</label>
                <?php echo $this->Form->input('email_address', array('label' => false, 'div' => false, 'type' => 'email')); ?>
                <label>Password</label>
                <?php echo $this->Form->input('password', array('label' => false, 'div' => false)); ?>
                <div class="radiobutton">
                    <?php $thisVal = isset($this->data['User']['account_type']) ? $this->data['User']['account_type'] : "renter"; ?>
                    <?php echo $this->Form->input('account_type', array(
                        'type'=>'radio',
                        'value'=> $thisVal,
                        'options' => array('renter'=>'RENTER', 'seller'=>'SELLER'),
                                            'legend' => false
                    )); ?>
                </div>
                <div class="clear"></div>
                <div class="checkbox">
                    <p><a href="#" class="my_modal_open terms">Click here to Review the Terms and Conditions</a></p>
                    <?php echo $this->Form->input('tos', array('type' => 'checkbox', 'label' => 'I accept the Terms and Conditions.', 'div' => false, 'hiddenField' => false, 'value' => '0')); ?>

                </div>
            </div>
            <div class="right">
                <label>Last Name</label>
                <?php echo $this->Form->input('last_name', array('label' => false, 'div' => false)); ?>
                <label>Phone No.</label>
                <?php echo $this->Form->input('phone', array('label' => false, 'div' => false)); ?>
                <label>Confirm Password</label>
                <?php echo $this->Form->input('password_confirm', array('label' => false, 'div' => false, 'type' => 'password')); ?>
            </div>
            

            <div class="buttons">
                <span class="next"><input type="submit" class="btnnext" value="NEXT" /></span>
            </div>
            <div class="clear"></div>
            <?php echo $this->Form->end(); ?>
            <div id="my_modal">
                <div class="message">

                    <div class="scroll">
                        <h1>TERMS AND CONDITIONS</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam.<p/>
                        <p>Eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui. in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>
                    </div>
                    <div class="buttons">
                        <span class="back"><input type="submit" class="btnback my_modal_close" value="CLOSE" /></span>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>

</div>