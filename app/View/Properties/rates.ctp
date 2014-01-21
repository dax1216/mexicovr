<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div id="content" class="seasons">
    <div class="title">
        <h1>RATES FOR YOUR LISTING</h1>
        <div class="line-black"></div>
    </div>
        <?php echo $this->Form->create('Property', array('action' => 'rates/'.$preview)); ?>
        <div id="contact">
            <div class="form">
               
                <?php
                    $months = array(
                        '1' => 'January',
                        '2' => 'February',
                        '3' => 'March',
                        '4' => 'April',
                        '5' => 'May',
                        '6' => 'June',
                        '7' => 'July',
                        '8' => 'August',
                        '9' => 'September',
                        '10' => 'October',
                        '11' => 'November',
                        '12' => 'December',
                    );
                ?>
                
                <?php foreach ($seasons as $key => $season) { ?>    
                    <ul class="season<?php echo $season == 'Holidays' ? ' holiday' : ''; ?>">
                        <li><h2><?php echo $season; ?>:</h2></li>
                        <?php if ($season != 'Holidays') { ?>
                            <li><label>From (Month):</label>
                                <div id="dd" class="wrapper-dropdown-1" tabindex="1">
                                    <?php echo $this->Form->input('from_' . $key, array('options' => $months, 'label' => false, 'value'=> isset($sess_rates[$key]['from'])?$sess_rates[$key]['from']:1)); ?>
                                </div>
                            </li>
                            <li><label>To (Month):</label>
                                <div id="dd1" class="wrapper-dropdown-1" tabindex="1">
                                    <?php echo $this->Form->input('to_' . $key, array('options' => $months, 'label' => false, 'value'=> isset($sess_rates[$key]['to'])?$sess_rates[$key]['to']:1)); ?>
                                </div>
                            </li>
                        <?php } ?>
                        <li<?php echo $season == 'Holidays' ? ' class="night"' : ''; ?>><label>$/night</label>
                            <?php echo $this->Form->input('night_rate_' . $key, array('class' => 'per', 'label' => false, 'value'=> isset($sess_rates[$key]['night_rate'])?$sess_rates[$key]['night_rate']:'')); ?>
                        </li>
                        <li<?php echo $season == 'Holidays' ? ' class="night"' : ''; ?>><label>$/week</label>
                            <?php echo $this->Form->input('week_rate_' . $key, array('class' => 'per', 'label' => false, 'value'=> isset($sess_rates[$key]['week_rate'])?$sess_rates[$key]['week_rate']:'')); ?>
                        </li>
                        <?php if ($season != 'Holidays') { ?>
                            <li><label>$/month</label>
                                <?php echo $this->Form->input('month_rate_' . $key, array('class' => 'per', 'label' => false, 'value'=> isset($sess_rates[$key]['month_rate'])?$sess_rates[$key]['month_rate']:'')); ?>
                            </li>
                        <?php } ?>
                    </ul>
                    <div class="clear"></div>
                <?php } ?>

                <ul class="season additional">
                    <li><label>Additional Information:</label></li>

                    <li>
                        <?php echo $this->Form->input('additional_information', array('class' => 'addition', 'label' => false, 'value'=> isset($sess_additional_information)?$sess_additional_information:'')); ?>
                    </li>
                </ul>						
                <div class="clear"></div>
                
            </div>
        </div>
        <div class="buttons">
            <span class="back"><input type="button" class="btnback" value="<< BACK" onclick="window.location = '<?php echo APP_URL.'properties/description/'.$preview; ?>'"/></span>
            <span class="next"><input type="submit" class="btnnext" value="NEXT >>" /></span>
        </div>
        <?php echo $this->Form->end(); ?>
</div>