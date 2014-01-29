
<div id="content" class="property ratings">

<div id="dd1" class="wrapper-dropdown-1" tabindex="1" style="float: left">
    <select>
        <option value="sale">FOR SALE</option>
        <option value="rent">FOR RENT</option>
    </select>
</div>

<div class="clear"></div>
<div class="title">
    <h1>Sort By:</h1>
    <div class="prices">PRICE:
        <div id="dd" class="wrapper-dropdown-1" tabindex="1">
            <select>
                <option value="sale">LOWEST TO HIGHEST</option>
                <option value="rent">HIGHEST TO LOWEST</option>
            </select>
        </div>
    </div>
    <div class="star">STAR RATING:
        <div id="dd1" class="wrapper-dropdown-1" tabindex="1">
            <select>
                <option value="sale">LOWEST TO HIGHEST</option>
                <option value="rent">HIGHEST TO LOWEST</option>
            </select>
        </div>
    </div>
</div>
<div class="clear"></div>
<div class="scrolling">
    <?php foreach($properties as $k=>$p){ ?>
        <?php if($k+1%3==1){ ?>
            <div class="rent">
            <ul>
        <?php    }?>
                <li>
                    <div class="title"><?php echo $p['Property']['title']; ?></div>
                    <?php if($p['photo']){ ?>
                        <?php
                                $image = $p['photo']['PropertyPhoto']['photo'];
                                    $imgFile = '';
                                    $ext = '';
                                    if ($image != '') {
                                        $imgFile = substr($image, 0, -4);
                                        $ext = substr($image, -3);
                                    }
                        ?>
                        <img src="<?php echo $this->webroot.$imgFile.'-resize-200x167-l.'.$ext; ?>" />
                    <?php } ?>
                    <div class="price">
                        <div class="left">
                            <div class="rating">RATING <img src="<?php echo $this->webroot; ?>images/star.png" /></div>
                            <div class="total">
                                <?php if($p['Property']['listing_type']=='rent'){ ?>
                                    $ <?php echo $p['rates']['PropertyRate']['night_rate']; ?>/NT&nbsp;&nbsp;&nbsp;$ <?php echo $p['rates']['PropertyRate']['week_rate']; ?>/WK
                                <?php }else{ ?>
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

        <?php if($k+1%3==0 || $k+1 == sizeof($properties)){ ?>
            </ul>
            </div>
            <div class="clear"></div>
        <?php    }?>

    <?php } ?>
    
    

</div>
</div>
