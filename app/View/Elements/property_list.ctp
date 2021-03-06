<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<input type="hidden" value="<?php echo $property_type; ?>" name="property_type" id="property_type"/>
<?php if (sizeof($properties)) { ?>
    <?php foreach ($properties as $k => $p) { ?>
        <?php if ($k + 1 % 3 == 1) { ?>
            <div class="rent">
                <ul>
                <?php } ?>

                <li>
                    <a href="<?php echo $this->webroot; ?>properties/view/<?php echo $p['Property']['id']; ?>" style="color: #fff;"><div class="title"><?php echo $p['Property']['title']; ?></div></a>
                    <?php if ($p['photo']) { ?>
                        <?php
                        $image = $p['photo']['PropertyPhoto']['photo'];
                        $imgFile = '';
                        $ext = '';
                        if ($image != '') {
                            $imgFile = substr($image, 0, -4);
                            $ext = substr($image, -3);
                        }
                        ?>
                        <a href="<?php echo $this->webroot; ?>properties/view/<?php echo $p['Property']['id']; ?>"><img src="<?php echo $this->webroot . $imgFile . '-resize-200x167-l.' . $ext; ?>" /></a>
                    <?php } ?>
                    <div class="price">
                        <?php if ($this->params['action'] == 'my_list') { ?>
                        <ul class="prop-user-action">
                            <li><a href="<?php echo $this->webroot; ?>properties/view/<?php echo $p['Property']['id']; ?>">VIEW</a></li>
                            <li><a href="<?php echo $this->webroot; ?>properties/edit/<?php echo $p['Property']['id']; ?>">EDIT</a></li>
                            <li><?php echo $this->Form->postLink(__('DELETE'), array('action' => 'delete', $p['Property']['id']), null, __('Are you sure you want to delete this property?')); ?></li>
                        </ul>
                        <?php } else { ?>
                            <?php if ($p['Property']['listing_type'] == 'rent') { ?>
                                <div class="left">
                                    <div class="rating"><div style="float:left; margin-right: 3px;">RATING </div><div class="star-rating" data-rating="<?php echo $p['star_rating']; ?>" style="float:right;margin-top:3px;"></div><div class="clear"></div></div>
                                    <div class="total">
                                        $ <?php echo $p['rates']['PropertyRate']['night_rate']; ?>/NT&nbsp;&nbsp;&nbsp;$ <?php echo $p['rates']['PropertyRate']['week_rate']; ?>/WK
                                    </div>
                                </div>
                                <div class="right">
                                    <ul class="icons">
                                        <?php if (isset($p['handicap_accessibility']) && $p['handicap_accessibility']) { ?> <li><img src="<?php echo $this->webroot; ?>images/disable.png"/></li> <?php } ?>
                                        <?php if (isset($p['pet_friendly']) && $p['pet_friendly']) { ?> <li><img src="<?php echo $this->webroot; ?>images/paw.png"/></li> <?php } ?>
                                        <?php if (isset($p['payment_type']) && $p['payment_type']) { ?> <li><img src="<?php echo $this->webroot; ?>images/card.png"/></li> <?php } ?>
                                    </ul>
                                </div>
                                <div class="clear"></div>
                            <?php } else { ?>
                                <h3>$ <?php echo $p['rates']['PropertyRate']['price']; ?></h3>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </li>


                <?php if ($k + 1 % 3 == 0 || $k + 1 == sizeof($properties)) { ?>
                </ul>
            </div>
            <div class="clear"></div>
        <?php } ?>
    <?php } ?>
<?php } else { ?>
    <div style="margin-left: 30px;">No property found.</div>    
<?php } ?>
