<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
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
                    <div class="left">
                        <div class="rating"><div style="float:left; margin-right: 3px;">RATING </div><div class="star-rating" data-rating="<?php echo $p['star_rating'];?>" style="float:right;margin-top:3px;"></div><div class="clear"></div></div>
                        <div class="total">
                            <?php if ($p['Property']['listing_type'] == 'rent') { ?>
                                $ <?php echo $p['rates']['PropertyRate']['night_rate']; ?>/NT&nbsp;&nbsp;&nbsp;$ <?php echo $p['rates']['PropertyRate']['week_rate']; ?>/WK
                            <?php } else { ?>
                                $ <?php echo $p['rates']['PropertyRate']['price']; ?>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="right">
                        <ul class="icons">
                            <li><img src="<?php echo $this->webroot; ?>images/disable.png"/></li>
                            <li><img src="<?php echo $this->webroot; ?>images/paw.png"/></li>
                            <li><img src="<?php echo $this->webroot; ?>images/card.png"/></li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>
            </li>


            <?php if ($k + 1 % 3 == 0 || $k + 1 == sizeof($properties)) { ?>
            </ul>
        </div>
        <div class="clear"></div>
    <?php } ?>
<?php } ?>