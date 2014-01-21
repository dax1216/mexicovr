<?php
//var_dump($property_address);
//var_dump($property_desc);
//// var_dump($property_activity);
//var_dump($property_rate);
?>
<?php
$this->Js->JqueryEngine->jQueryObject = '$j';
echo $this->Html->scriptBlock(
        'var $j = jQuery.noConflict();', array('inline' => false)
); // Tell jQuery to go into noconflict mode
?>
<div class="left">
    <div class="products">
        <div id="contact" class="single">
            <h1 class="title left"><?php echo $property['Property']['title']; ?></h1>
            <div class="right product"><p>MXVR# <?php echo $property['Property']['id']; ?> <span>PHOTO GALLERIES</span></p></div>
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
                        if (isset($property_photos)) {
                            foreach ($property_photos as $photo) {
                                ?>
                                <?php
                                $image = $photo['PropertyPhoto']['photo'];
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
                                <?php
                            }
                        }
                        ?>
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
            <li class="last"><a href="#reviews">REVIEWS</a></li>
        </ul>
        <div id="about">
            <div class="left">
                <div class="scroll">
                    <h1 class="green"><?php echo $property['Property']['title']; ?></h1>
                    <h3 class="green">

                        <?php
                        if ($property['Property']['bedrooms'] == '1') {
                            echo $property['Property']['bedrooms'] . " BED / ";
                        } else {
                            echo $property['Property']['bedrooms'] . " BEDS / ";
                        }

                        if ($property['Property']['bathrooms'] == '1') {
                            echo $property['Property']['bathrooms'] . " BATH ";
                        } else {
                            echo $property['Property']['bathrooms'] . " BATHS ";
                        }
                        ?>
                    </h3>
                    <img src="<?php echo $this->webroot; ?>images/about1.jpg" />
                    <p>
                        <?php echo $property['Property']['description']; ?>
                    </p>
                </div>
            </div>
            <div class="right">

                <?php foreach ($property_activities as $activity):
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
        <?php // echo $this->element('review', array('property_id' => $property['Property']['id'])); ?>
    </div><!-- my_modal1 -->

    <div id="my_modal2" class="modals">
        <!------ Write a review ------->
        <?php // echo $this->element('contact') ?>

    </div><!-- my_modal2 -->
    <?php // var_dump($property['video']);   ?>
    <div id="my_modal3" class="modals">
        <?php if (isset($property['Property']['video']) && $property['Property']['video']) { ?>
            <!------ Video ------->
            <iframe title="YouTube video player" class="youtube-player" type="text/html" 
                    width="420" height="345" src="<?php echo $property['Property']['video']; ?>"
                    frameborder="0" allowFullScreen></iframe>

        <?php } ?>
    </div><!-- my_modal3 -->

    <div id="my_modal4" class="modals">
        <?php if (isset($property['Property']['audio']) && $property['Property']['audio']) { ?>
            <!------ Audio ------->
            <!--            <embed
                        width="420" height="345"
                        src="<?php echo $this->webroot; ?>/files/uploads/properties/<?php echo $property['audio']; ?>">
                        </embed>-->
            <object height="345" width="420" data="<?php echo $this->webroot . $property['Property']['audio']; ?>"></object>
        <?php } ?>
    </div><!-- my_modal4 -->
</div><!-- left -->




<div id="sidebar" class="side-product">
    <ul class="images">
        <li><img src="<?php echo $this->webroot; ?>images/img1.jpg" /></li>
        <li><?php echo isset($property['Property']['video']) && $property['Property']['video'] ? '<a href="#" class="my_modal3_open"><img src="' . $this->webroot . 'images/img2.jpg" /></a>' : '<img src="' . $this->webroot . 'images/img2.jpg" />'; ?></li>
        <li><?php echo isset($property['Property']['audio']) && $property['Property']['audio'] ? '<a href="#" class="my_modal4_open"><img src="' . $this->webroot . 'images/img3.jpg" /></a>' : '<img src="' . $this->webroot . 'images/img3.jpg" />'; ?></li>
        <li><a href="#" class="my_modal1_open"><img src="<?php echo $this->webroot; ?>images/img4.jpg" /></a></li>
        <li><a href="#" class="my_modal2_open"><img src="<?php echo $this->webroot; ?>images/img5.jpg" /></a></li>
        <li><a href="#" class="my_modal_open"><img src="<?php echo $this->webroot; ?>images/img6.png" /></a></li>
    </ul>
</div>
<div class="clear"></div>
<?php
$this->Js->get('.my_modal1_open')->event(
        'click', $this->Js->request(
                array('controller' => 'reviews', 'action' => 'display_review_element/' . $property['Property']['id']), array(
                    'update' => '#my_modal1',
                    'async' => true,
                    'dataExpression' => true,
                    'complete' =>
                    '
                                        $j("#datefrom").datepicker({ picker: "<img class=\'picker\' align=\'middle\' src=\'' . $this->webroot . 'images/calendar.png\' alt=\'\'/>" });
                                        $j("#dateto").datepicker({ picker: "<img class=\'picker\' align=\'middle\' src=\'' . $this->webroot . 'images/calendar.png\' alt=\'\'/>" });
                                        $j("#arrive").datepicker({ picker: "<img class=\'picker\' align=\'middle\' src=\'' . $this->webroot . 'images/calendar.png\' alt=\'\'/>" });
                                        $j("#depart").datepicker({ picker: "<img class=\'picker\' align=\'middle\' src=\'' . $this->webroot . 'images/calendar.png\' alt=\'\'/>" });
                                        $j("#score-demo").raty({ score: 3, path: "'.$this->webroot.'js/raty/lib/img", score: function(){alert("test");}});
                    '
                )
        )
);
$this->Js->get('.my_modal2_open')->event(
        'click', $this->Js->request(
                array('controller' => 'properties', 'action' => 'display_contact_element/' . $property['Property']['id']), array(
            'update' => '#my_modal2',
            'async' => true,
            'dataExpression' => true
                )
        )
);
?>
<script type="text/javascript">
    jQuery('#ReviewAddForm').live('submit',function(){
        var data = jQuery(this).serialize();
        //        console.info(data);
        jQuery.ajax({
            type: "POST",
            data: data,
            url: '<?php echo APP_URL . 'reviews/add'; ?>',
            success: function(d){
                console.info(d.message)
                jQuery('#war-wrapper').html(d.message);
            },
            dataType: 'json'
                
        });
    })
    jQuery('#PropertyContactOwnerForm').live('submit',function(){
        var data = jQuery(this).serialize();
        //        console.info(data);
        jQuery.ajax({
            type: "POST",
            data: data,
            url: '<?php echo APP_URL . 'properties/contact_owner'; ?>',
            success: function(d){
                console.info(d.message)
                jQuery('#contact-wrapper').html(d.message);
            },
            dataType: 'json'
                
        });
    })
</script>
<?php echo $this->Js->writeBuffer(); ?>
