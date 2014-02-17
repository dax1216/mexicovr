<?php
//var_dump($property_address);
//var_dump($property_desc);
//// var_dump($property_activity);
//var_dump($property_rate);
?>


<div class="left">
    <div class="products">
        <div id="contact" class="single">
            <h1 class="title left"><?php echo $property['property_desc']['title']; ?></h1>
            <div class="right product"><p>MXVR# 379 <span>PHOTO GALLERIES</span> <span style="margin-left: 50px;"><a style="color:#f5e016; text-decoration: underline;" href="<?php echo APP_URL.'properties/upload_photos/1'; ?>">Edit</a></span></p></div>
            <div class="clear"></div>
            <div class="wrap">
                <div id="gallery" class="content">
                    <div class="slideshow-container">
                        <div id="loading" class="loader"></div>
                        <div id="slideshow" class="slideshow"></div>
                        <div id="caption" class="caption-container"></div>
                    </div>
                </div>
                <div id="thumbs" class="navigation right">
                    <ul class="thumbs noscript">
                        
                        <?php 
                        if(isset($property['photos'])){    
                            foreach ($property['photos'] as $photo) { ?>
                            <?php 
                                $image = $photo;
                                $imgFile = '';
                                $ext = '';
                                if ($image != '') {
                                    $imgFile = substr($image, 0, -4);
                                    $ext = substr($image, -3);
                                }
                            ?>
                            <li>
                                <a class="thumb" name="drop" href="<?php echo $this->webroot; ?><?php echo $imgFile; ?>-resize-465x382-r.<?php echo $ext; ?>" title="Title #1">
                                    <img src="<?php echo $this->webroot; ?><?php echo $imgFile; ?>-resize-65x60-s.<?php echo $ext; ?>" alt="Title #1" />
                                </a>
                                <div class="caption">
                                    Beachfront
                                </div>
                            </li>
                        <?php } 
                        }?>
                    </ul>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div><!-- products -->

    <div class="tabs">
        <ul>
            <li class="first"><a href="#about">ABOUT THIS ACCOMMODATION</a></li>
            <li><a href="#rate">RATES</a></li>
            <li><a href="#calendar">CALENDAR</a></li>
            <li class="last"><a href="#reviews">REVIEWS</a><a style="color:#f5e016; text-decoration: underline;" href="<?php echo APP_URL.'properties/description/1'; ?>">Edit</a></li>
        </ul>
        <div id="about">
            <div class="left">
                <div class="scroll">
                    <h1 class="green"><?php echo $property['property_desc']['title']; ?></h1>
                    <h3 class="green">

                        <?php
                        if ($property['property_desc']['bedrooms'] == '1') {
                            echo $property['property_desc']['bedrooms'] . " BED / ";
                        } else {
                            echo $property['property_desc']['bedrooms'] . " BEDS / ";
                        }

                        if ($property['property_desc']['bathrooms'] == '1') {
                            echo $property['property_desc']['bathrooms'] . " BATH ";
                        } else {
                            echo $property['property_desc']['bathrooms'] . " BATHS ";
                        }
                        ?>
                    </h3>
                    <img src="<?php echo $this->webroot; ?>images/about1.jpg" />
                    <p>
                        <?php echo $property['property_desc']['description']; ?>
                    </p>
                </div>
            </div>
            <div class="right">

                <?php foreach ($activities as $activity):
                    ?>
                    <img src="<?php echo $this->webroot; ?><?php echo $activity['Activity']['icon']; ?>" />
                <?php endforeach; ?>

            </div>
            <div class="clear"></div>
        </div><!-- about -->
        <div id="rate">
            <div class="scroll">
                <p>
                    <?php echo $property['property_rate']['rate']; ?>
                </p>
            </div>
        </div>
        <div id="calendar"></div>
        <div id="reviews"></div>
    </div><!-- tabs -->

    <div id="my_modal" class="modals">
        <!------ Write a review ------->
        <?php echo $this->element('message') ?>
    </div><!-- my_modal -->

    <div id="my_modal1" class="modals">
        <!------ Write a review ------->
        <?php echo $this->element('review') ?>
    </div><!-- my_modal1 -->

    <div id="my_modal2" class="modals">
        <!------ Write a review ------->
        <?php // echo $this->element('contact') ?>

    </div><!-- my_modal2 -->
    
    <?php // var_dump($property['video']); ?>
    <div id="my_modal3" class="modals">
        <?php if(isset($property['video'])){ ?>
            <!------ Video ------->
            <iframe title="YouTube video player" class="youtube-player" type="text/html" 
width="420" height="345" src="<?php echo $property['video']; ?>"
frameborder="0" allowFullScreen></iframe>
            
        <?php } ?>
    </div><!-- my_modal3 -->
    
    <div id="my_modal4" class="modals">
        <?php if(isset($property['audio'])){ ?>
            <!------ Audio ------->
            <?php foreach($property['audio'] as $a){ ?>    
                <object height="345" width="420" data="<?php echo $this->webroot.$a; ?>"></object>
            <?php } ?>
         <?php } ?>
    </div><!-- my_modal3 -->
    <div class="buttons">
        <?php echo $this->Form->create('Property', array('action' => 'save_property')); ?>
            <span class="sub"><input type="submit" class="btnnext btnSub" value="SUBMIT" /></span>
<!--            <span class="sub"><input type="submit" class="btnSub my_modal_open" value="UPDATE" /></span>-->
<!--            <span class="sub"><input type="button" value="UPDATE" class="btnnext"/></span>-->
        <?php echo $this->Form->end(); ?>
    </div>	
</div><!-- left -->




<div id="sidebar" class="side-product">
    <ul class="images">
        <li><img src="<?php echo $this->webroot; ?>images/img1.jpg" /></li>
        <li><?php echo isset($property['video'])?'<a href="#" class="my_modal3_open"><img src="'.$this->webroot.'images/img2.jpg" /></a>':'<img src="'.$this->webroot.'images/video-disabled.png" />';?></li>
        <li><?php echo isset($property['audio'])?'<a href="#" class="my_modal4_open"><img src="'.$this->webroot.'images/img3.jpg" /></a>':'<img src="'.$this->webroot.'images/audio-disabled.png" />';?></li>
        <li><a href="#" ><img src="<?php echo $this->webroot; ?>images/img4.jpg" /></a></li>
        <li><a href="#" ><img src="<?php echo $this->webroot; ?>images/img5.jpg" /></a></li>
        <li><a href="#" class="my_modal_open"><img src="<?php echo $this->webroot; ?>images/img6.png" /></a></li>
    </ul>
</div>
<div class="clear"></div>