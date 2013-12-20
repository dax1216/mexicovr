<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>
            <?php echo $title_for_layout; ?>
        </title>

        <meta name="description" content=""/>
        <meta name="author" content=""/>
        <?php
        echo $this->Html->meta('icon');
        echo $this->fetch('meta');

        echo $this->Html->css(array('jscrollpane','dp','datepicker','normalize','style'));
	echo $this->fetch('css');


        echo $this->Html->script(array('jquery.min', 'tabs','popup','modernizr.custom.79639','jquery.mousewheel','jquery.jscrollpane','dropdown','jquery.ui.core','jquery.ui.datepicker','jquery-ui.multidatespicker','prettify','lang-css'));
		echo $this->fetch('script');
        ?>

        <!--[if IE 8]>
            <script type="text/javascript">
            jQuery(document).ready(function() {
                jQuery.noConflict();
                jQuery('#ie8').prepend('<img id="theImg" src="images/bg.png" />');
             });
                // your inline script goes here
            </script>
            <style type="text/css">
                #ie8 {
                          position: fixed; 
                          top: -50%; 
                          left: -50%; 
                          width: 200%; 
                          height: 200%;
                        }
                        #ie8 img {
                          position: absolute; 
                          top: 0; 
                          left: 0; 
                          right: 0; 
                          bottom: 0; 
                          margin: auto; 
                          min-width: 50%;
                          min-height: 50%;
                          z-index: -1000;
                        }
                        #footerWrap {
                          position: relative;
                          z-index: 999;
                        }
            </style>
        <![endif]-->

        <script type="text/javascript"> 
 
            jQuery(document).ready(function() {
                jQuery.noConflict();
                jQuery('#my_modal').popup();

                jQuery('.terms').click(function(){

                    jQuery('.scroll').show(5000).jScrollPane(	{
                        showArrows: false,
                        arrowScrollOnHover: true,
                        verticalDragMinHeight: 30,
                        verticalDragMaxHeight: 30,
                        autoReinitialise: true,
                        verticalGutter: 10
                    }
                );
                });
            });
        </script>

    </head>



    <body>
        <div id="ie8"></div>
        <?php echo $this->element('menu') ?>
        <div id="bgWrap">
            <?php echo $content_for_layout ?>

            <div id="sidebar">
                <?php echo $this->element('advertise') ?>
            </div>
            <div class="clear"></div>
        </div><!--end of bgWrap-->
        <div class="clear"></div>
        <?php echo $this->element('footer') ?>
    </body>
</html>
