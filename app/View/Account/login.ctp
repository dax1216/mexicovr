<div id="content">
    <div id="contact" class="members">
        <h1 class="title">Account Login</h1>
        <div class="line"></div>
        <div class="form">
            <?php echo $this->Session->flash(); ?>
            <?php echo $this->Form->create('User', array('class' => 'form-signin')); ?>
                <div class="left">
                    <label>Email Address</label>
                    <?php echo $this->Form->input('email_address', array('label' => false, 'div'=>false,'type'=>'email')); ?>
                    <label>Password</label>
                    <?php echo $this->Form->input('password', array('label' => false, 'div'=>false)); ?>
                    <span class="register"><a href="<?php echo $this->webroot; ?>account/register">Register</a></span>
                    <span class="forgot"><a href="<?php echo $this->webroot; ?>account/forgot_password">Forgot your password?</a></span>
                    <div class="buttons">
                        <span class="next"><input type="submit" class="btnnext" value="LOGIN" /></span>
                    </div>
                    <div class="clear"></div>
                </div>					
            <?php echo $this->Form->end(); ?>
            <div id="my_modal">
                <div class="message">
                    <h1>Your message has been sent. <br/>One of our agents will contact you<br/>within 5 business days.</h1>
                </div>
            </div>
        </div>
    </div>

</div>