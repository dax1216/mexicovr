<?php echo $this->Html->script(array('constants','jquery-ui-1.10.4.custom.min'));?>
<?php echo $this->Html->css('jquery-ui-smoothness');?>
<div id="content">
    <div id="contact" class="members register account">
        <h1 class="title">Account Information</h1>
        <div class="line"></div>

        <div class="form">
            <?php echo $this->Session->flash(); ?>
            <?php echo $this->Form->create('User'); ?>
            <input type="hidden" name="change_password" value="0" />
            <ul class="nav nav-tabs" id="myTab">
                <li><a href="#edit-profile" data-toggle="tab">Edit Profile</a></li>
                <li><a href="#change-password" data-toggle="tab">Change Password</a></li>
            </ul>

            <div class="tab-pane active" id="edit-profile">
                <div class="row-fluid">

                    <?php
                    echo $this->Form->input('user_id');
                    ?>
                    <div class="left">
                        <?php 
                        echo $this->Form->input('first_name', array('label' => 'First Name', 'tabindex'=>1));
                        echo $this->Form->input('email_address', array('label' => 'Email Address', 'tabindex'=>3));
                        ?>
                    </div>
                    <div class="right">
                        <?php 
                        echo $this->Form->input('last_name', array('label' => 'Last Name', 'tabindex'=>2));
                        echo $this->Form->input('email_address_confirm', array('type' => 'hidden'));
                        ?>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="line"></div>
                <div class="row-fluid">
                    <h3>Contact Details</h3>
                    <div class="left">
                         <?php
                        echo $this->Form->input('phone', array('error' => array('attributes' => array('class' => 'label label-important'))));
                        ?>
                    </div>
                    <div class="clear"></div>
                    <div class="left">
                         <?php
                        echo $this->Form->input('address1', array('error' => array('attributes' => array('class' => 'label label-important', 'label'=>'Address 1'))));
                        echo $this->Form->input('city', array('error' => array('attributes' => array('class' => 'label label-important'))));
                        echo $this->Form->input('state', array('error' => array('attributes' => array('class' => 'label label-important'))));
//                        echo $this->Form->input('state', array('options' => $this->Geography->stateList(array('outside' => 'Outside US')), 'empty' => 'Select State', 'error' => array('attributes' => array('class' => 'label label-important'))));
                        ?>
                    </div>
                    <div class="right">
                        <?php
                        echo $this->Form->input('address2', array('error' => array('attributes' => array('class' => 'label label-important', 'label'=>'Address 2'))));
                        echo $this->Form->input('zip', array('error' => array('attributes' => array('class' => 'label label-important'))));
//                        echo $this->Form->input('country', array('options' => $this->Geography->countryList(), 'empty' => 'Select Country', 'default' => 'US', 'error' => array('attributes' => array('class' => 'label label-important'))));
                        ?>
                    </div>
                </div>
                <div class="clear"></div>
                <?php echo $this->Form->end(array('class' => 'btn btn-primary', 'label' => 'Update My Account')); ?>
            </div>
            
            <div class="tab-pane" id="change-password">
                <div class="line"></div>
                <div class="row-fluid">
                    <h3>Change Password</h3>
                    <?php echo $this->Form->create('User', array('url' => '/account/index#change-password', 'autocomplete' => 'off')); ?>
                        <input type="hidden" name="change_password" value="1" />
                        <?php
                        echo $this->Form->input('current_password', array('label' => 'Current Password', 'type' => 'password'));
                        echo $this->Form->input('password', array('value' => '', 'label' => 'New Password', 'type' => 'password'));
                        echo $this->Form->input('password_confirm', array('label' => 'Confirm New Password', 'type' => 'password'));
                        ?>
                        <?php echo $this->Form->end(array('class' => 'btn btn-primary', 'label' => 'Change Password')); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    jQuery(document).ready(function() {
//        jQuery('i[rel=tooltip]').tooltip();
//
//        if(window.location.href.indexOf('change-password') >= 0) {
//            jQuery('#myTab a:last').tab('show');
//        } else {
//            jQuery('#myTab a:first').tab('show');
//        }
        jQuery("#UserCity").autocomplete({
            source: cities
        });
        jQuery("#UserState").autocomplete({
            source: states
        });
    });
</script>
