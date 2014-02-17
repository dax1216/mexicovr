<div id="content">
    <div id="contact" class="listing">
        <h1 class="title">Description of your listing</h1>
        <div class="form">
            <?php echo $this->Form->create('Property', array('action' => 'description/' . $preview)); ?>
            <label>Title of your Listing: </label>
            <?php echo $this->Form->input('title', array('tabindex' => '1', 'label' => false, 'div' => false, 'value' => isset($sess_desc['title']) ? $sess_desc['title'] : '')); ?>

            <div class="line-black"></div>
            <label>Description of the Villa:<br/>(No limit of characters)</label>

            <?php echo $this->Form->textarea('description', array('value' => isset($sess_desc['description']) ? $sess_desc['description'] : '')); ?>

            <div class="right">



                <?php
                echo $this->Form->input('bedrooms', array(
                    'options' => array(1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5),
                    'label' => 'Number of Bedrooms: ',
                    'value' => isset($sess_desc['bedrooms']) ? $sess_desc['bedrooms'] : ''
                ));
                ?>

                <?php
                echo $this->Form->input('bathrooms', array(
                    'options' => array(1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5),
                    'label' => 'Number of Bathrooms: ',
                    'value' => isset($sess_desc['bathrooms']) ? $sess_desc['bathrooms'] : ''
                ));
                ?>

            </div>

            <div class="clear"></div>
        </div>
        
        <?php echo $this->Html->script(array('raty/lib/jquery.raty.min')); ?>
        <script type="text/javascript">
            jQuery(document).ready(function(){
                jQuery('.star-hover').css('display','none');
                jQuery('.cloud').css('display','none');
                jQuery('#info-icon').mouseover(function(){
                    jQuery('.cloud').css('display','block');
                });
                jQuery('#info-icon').mouseout(function(){
                    jQuery('.cloud').css('display','none');
                });
                jQuery("#score-demo").raty({
                    score: <?php echo isset($sess_desc['rate']) ? $sess_desc['rate'] : 0; ?>,
                    path: "<?php echo $this->webroot; ?>js/raty/lib/img",
                    width: 150,
                    click: function(score, evt){
                        jQuery("#PropertyRate").val(score);
                    },
                    mouseover:function(score, evt){
                        if(score == 5){
                            jQuery('.star-hover').css('display','block');
                        }else{
                            jQuery('.star-hover').css('display','none');
                        }
                    },
                    mouseout:function(){
                        jQuery('.star-hover').css('display','none');
                    }
                });
            });
        </script>
        
        <div class="rate-listing">
            <h1 class="title">Rate your listing <img src="<?php echo $this->webroot; ?>images/icons.png" id="info-icon"/></h1>
            <div class="cloud">This is a Hover!</div>
            <div class="stars title">
                <div id="score-demo"></div>
                <?php echo $this->Form->input('rate', array('type'=>'hidden')); ?>
<!--                <img src="<?php echo $this->webroot; ?>images/stars1.png"/>-->
                <div class="star-hover" style="display: none;">
                    <h1>5 Stars <img src="<?php echo $this->webroot; ?>images/stars1.png"/></h1>
                    <p id="hint">Highest standard of comfort and luxury
                        Premium grade materials in onstruction, decor and furniture
                        Spacious rooms with high quality bath and beddings
                        State-of-the-art entertainment center with TV, CD and DVD
                        High-speed internet service
                        Onsite staff including chef, maid(s), concierge
                        Valet and/or private parking
                        On-site spa services and fitness center
                        High quality pool and spa services
                        Business Center
                        May have Tennis and golf course access</p>
                </div>
            </div>
        </div>

        <div class="line"></div>
        <div class="left">
            <h1 class="title">List of activities</h1>

            <ul class="activity">
                <?php
                $idt = 0;
                foreach ($activities as $activity):
                    ?>
                    <li>
                        <div class="squaredFour">
                            <img src="<?php echo $this->webroot; ?><?php echo h($activity['Activity']['icon']); ?>" />
                            <?php
                            $name = $activity['Activity']['name'];
                            $id = "squaredFour" . $idt;
                            echo $this->Form->checkbox('activity', array(
                                'id' => $id,
                                'value' => $activity['Activity']['id'],
                                "name" => 'data[Property][activity][]',
                                'hiddenField' => false,
                                'checked' => $sess_activities && sizeof($sess_activities) ? in_array($activity['Activity']['id'], $sess_activities) : false
                            ));
                            ?>
                            <label for="squaredFour<?php echo $idt; ?>"></label>
                            <span class="text"><?php echo h($activity['Activity']['name']); ?></span>
                        </div>
                    </li>
                    <?php
                    $idt++;
                endforeach;
                ?>

            </ul>

        </div>
        <?php if(isset($sess_listing_type) && $sess_listing_type == 'rent'){ ?>
        <div class="clear"></div>

        <div class="line"></div>

        <div class="payments">
            <h1 class="title">Types of Payment Accepted</h1>
            <ul class="activity">
                <?php $idPayment = isset($activities) ? sizeof($activities) : 0; ?>
                <?php foreach ($payment_types as $payment_type) { ?>
                    <li>
                        <div class="squaredFour">
                            <?php
                            $name = $payment_type['PaymentType']['name'];
                            $id = "squaredFour" . $idPayment;
                            echo $this->Form->checkbox('activity', array(
                                'id' => $id,
                                'value' => $payment_type['PaymentType']['id'],
                                "name" => 'data[Property][payment_type][]',
                                'hiddenField' => false,
                                'checked' => $sess_payment_types && sizeof($sess_payment_types) ? in_array($payment_type['PaymentType']['id'], $sess_payment_types) : false
                            ));
                            ?>
                            <label for="squaredFour<?php echo $idPayment; ?>"></label>
                            <img src="<?php echo $this->webroot; ?><?php echo h($payment_type['PaymentType']['icon']); ?>" />
                            <span class="text"><?php echo h($payment_type['PaymentType']['name']); ?></span>
                        </div>
                    </li>
                        <?php $idPayment++;
                    } ?>
            </ul>
        </div>

        <div class="line"></div>

        <div class="misc">
            <h1 class="title">Miscellaneous</h1>
            <ul class="activity">
                    <?php $idMisc = (isset($activities) ? sizeof($activities) : 0) + (isset($payment_types) ? sizeof($payment_types) : 0); ?>
                    <?php foreach ($miscellaneous_items as $miscellaneous_item) { ?>
                    <li>
                        <div class="squaredFour">
                            <?php
                            $name = $miscellaneous_item['MiscellaneousItem']['name'];
                            $id = "squaredFour" . $idMisc;
                            echo $this->Form->checkbox('activity', array(
                                'id' => $id,
                                'value' => $miscellaneous_item['MiscellaneousItem']['id'],
                                "name" => 'data[Property][miscellaneous_item][]',
                                'hiddenField' => false,
                                'checked' => $sess_miscellaneous_items && sizeof($sess_miscellaneous_items) ? in_array($miscellaneous_item['MiscellaneousItem']['id'], $sess_miscellaneous_items) : false
                            ));
                            ?>
                            <label for="squaredFour<?php echo $idMisc; ?>"></label>
                            <img src="<?php echo $this->webroot; ?><?php echo h($miscellaneous_item['MiscellaneousItem']['icon']); ?>" />
                            <span class="text"><?php echo h($miscellaneous_item['MiscellaneousItem']['name']); ?></span>
                        </div>
                    </li>     
                    <?php $idMisc++; ?>
                    <?php } ?>
            </ul>
        </div>
        <?php } ?>
         <div class="clear"></div>
        <div class="buttons">
            <?php if (!$preview) { ?>
                <span class="back"> <input type="button" class="btnback" value="<< BACK" onclick="window.location = '<?php echo APP_URL . 'properties/address/' . $sess_param_listing_type; ?>'"/> </span>
        <?php } ?>
            <span class="next"><input type="submit" class="btnnext" value="NEXT >>" /></span>
        </div>
<?php echo $this->Form->end(); ?>
    </div>

</div>
