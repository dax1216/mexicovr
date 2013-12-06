<!--<form class="form-forgot-password">
    <h2 class="form-signin-heading">Account Recovery</h2>
    <?php echo $this->Form->create('User'); ?>
    <table class="table table-striped">
        <tr>
            <td><input type="radio" value="forgot_password" name="access_problem" checked="checked" /> I forgot my password</td>
            <td><input type="radio" value="forgot_username" name="access_problem" /> I can't remember my username</td>
        </tr>
        <tr>
            <td><?php echo $this->Form->input('first_name') ?></td>
            <td><?php echo $this->Form->input('last_name') ?></td>
        </tr>
        <tr>
            <td colspan="2"><?php echo $this->Form->input('email_address', array('label' => 'Your E-mail Address')) ?></td>
        </tr>
    </table>    
    <button class="btn btn-large btn-primary" type="submit">Submit</button>
    <?php echo $this->Form->end() ?>
</form>-->
<div id="content">
    <div id="contact" class="members forgot">
        <h1 class="title"></h1>
        <div class="form">
            <?php echo $this->Session->flash(); ?>
            <?php echo $this->Form->create(array('url' => '/account/forgot_password', 'autocomplete' => 'off')); ?>
                <div class="left">
                    <p><em>If you have forgotten your password, you can request to reset your password. When you fill in your registered email address, you will be sent instructions on how to reset your password.</em></p>

                    <div class="buttons">
                        <label>Email Address</label>
                        <?php echo $this->Form->input('email_address', array('label' => false, 'div'=>false, 'type'=>'email')) ?>
                        <span class="back"><input type="submit" class="btnback" value="REQUEST PASSWORD" /></span>
                    </div>
                    <div class="clear"></div>
                </div>					
            <?php echo $this->Form->end(); ?>
            <div id="my_modal">
                <div class="message">
                    <h1>Your user name and how to reset your password<br/> has been sent to you by email. <br/>You will now be returned to the login page.</h1>
                </div>
            </div>
        </div>
    </div>

</div>