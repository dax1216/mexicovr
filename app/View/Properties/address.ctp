<?php echo $this->Html->script(array('constants','jquery-ui-1.10.4.custom.min'));?>
<?php echo $this->Html->css('jquery-ui-smoothness');?>
<div id="content">
    <div id="contact" class="members address">
        <h1 class="title">Your Property Address</h1>
        <div class="line"></div>
        <div class="form">
            <p>Your address will remain completely confidential, will not be displayed to the public, and will only show on the map upon your approval. If you wish not to disclose your address, please skip this step and click Next to proceed.</p>
            <?php echo $this->Form->create('Property', array('action' => 'address')); ?>
            <?php echo $this->Form->hidden('package', array('value'=>$package, 'label' => false, 'div' => false)); ?>
            <div class="left">
                <label>Address 1</label>
                <?php echo $this->Form->input('address1', array('tabindex'=>'1', 'label' => false, 'div' => false, 'value'=>isset($sess_address['address1'])?$sess_address['address1']:'')); ?>
            </div>
            <div class="right">
                <label>Address 2</label>
                <?php echo $this->Form->input('address2', array('tabindex'=>'2','label' => false, 'div' => false, 'value'=>isset($sess_address['address2'])?$sess_address['address2']:'')); ?>
            </div>
            <div class="clear"></div>
            <div class="left">
                <label>City</label>
                <?php echo $this->Form->input('city', array('tabindex'=>'3','label' => false, 'div' => false, 'value'=>isset($sess_address['city'])?$sess_address['city']:'')); ?>
            </div>
            <div class="right">
                <label>Zip</label>
                <?php echo $this->Form->input('zip', array('tabindex'=>'4','label' => false, 'div' => false, 'value'=>isset($sess_address['zip'])?$sess_address['zip']:'')); ?>
            </div>
            <div class="clear"></div>
            <div class="left">
                <label>State</label>
                <?php echo $this->Form->input('state', array('tabindex'=>'5','label' => false, 'div' => false, 'value'=>isset($sess_address['state'])?$sess_address['state']:'')); ?>
            </div>
            <div class="right">
                <div style="margin-top:50px;"><a href="#" id="show-on-map" style="text-decoration:underline;" tabindex="6",>Show on google map</a></div>
            </div>
            <div class="clear"></div>
            <div class="map">
                <label>( This information would show on google map)</label>
                
                <div id="map-canvas"></div>
            </div>
            <div class="buttons">
                <span class="next"><input type="submit" class="btnnext" value="NEXT >>" tabindex="7"/></span>
            </div>
            <div class="clear"></div>
            <?php echo $this->Form->end(); ?>
        </div>
    </div>

</div>

<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery("#PropertyCity").autocomplete({
            source: cities
        });
        jQuery("#PropertyState").autocomplete({
            source: states
        });
    });
    jQuery('a#show-on-map').click(function(e){
        codeAddress(); 
        e.preventDefault();
    })
</script>