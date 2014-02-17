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

        echo $this->Html->css(array('jscrollpane', 'dp', 'datepicker', 'normalize', 'style'));
        echo $this->fetch('css');


        echo $this->Html->script(array('jquery.min', 'tabs', 'popup', 'modernizr.custom.79639', 'jquery.mousewheel', 'jquery.jscrollpane', 'dropdown', 'jquery.ui.core', 'jquery.ui.datepicker', 'jquery-ui.multidatespicker', 'prettify', 'lang-css'));
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
                
                jQuery('.scrolling').jScrollPane(
                {
                    showArrows: false,
                    arrowScrollOnHover: true,
                    verticalDragMinHeight: 48,
                    verticalDragMaxHeight: 48,
                    autoReinitialise: true,
                    verticalGutter: 10,
                    horizontalGutter: 10
                }
            );                                  
                jQuery(".rent ul li:last-child").addClass("last");
            });
        </script>
        <style type="text/css">
            #map-canvas { height: 300px; width: 500px; position: relative; }
        </style>
        <script type="text/javascript"
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvsh3YABUjYAInOT1Hqut-BeCQXroLK_s&sensor=false">
        </script>
        <style>

            .controls {
                margin-top: 16px;
                border: 1px solid transparent;
                border-radius: 2px 0 0 2px;
                box-sizing: border-box;
                -moz-box-sizing: border-box;
                height: 32px;
                outline: none;
                box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
            }

            #pac-input {
                background-color: #fff;
                padding: 0 11px 0 13px;
                width: 400px;
                font-family: Roboto;
                font-size: 15px;
                font-weight: 300;
                text-overflow: ellipsis;
                /*                display: none;*/
            }

            #pac-input:focus {
                border-color: #4d90fe;
                margin-left: -1px;
                padding-left: 14px;  /* Regular padding-left + 1. */
                width: 401px;
            }

            .pac-container {
                font-family: Roboto;
            }

            #type-selector {
                color: #fff;
                background-color: #4d90fe;
                padding: 5px 11px 0px 11px;
            }

            #type-selector label {
                font-family: Roboto;
                font-size: 13px;
                font-weight: 300;
            }


        </style>
        <title>Places search box</title>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
        <script>
          
            var geocoder;
            var map;
            function initialize() {
                geocoder = new google.maps.Geocoder();
                var latlng = new google.maps.LatLng(19.4328, -99.1333);
                var mapOptions = {
                    zoom: 8,
                    center: latlng
                }
                map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
            }

            function codeAddress() {
                var address;
                container = document.getElementById('PropertyAddressForm');

                // Find its child `input` elements
                inputs = container.getElementsByTagName('input');
                for (index = 0; index < inputs.length; ++index) {
                    if(inputs[index].type ==='text'){
                        if(inputs[index].id == 'PropertyAddress1'){
                            address = inputs[index].value;
                        }else{
                            address = inputs[index].value!=''?address+' '+inputs[index].value:address;
                        }
                    }
                }
                address = address!=''?address+' '+'Mexico':'Mexico';
                //var address = document.getElementById('address').value;
                geocoder.geocode( { 'address': address}, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        map.setCenter(results[0].geometry.location);
                        var marker = new google.maps.Marker({
                            map: map,
                            position: results[0].geometry.location
                        });
                    } else {
                        alert('Google map cannot locate the address entered.' + status);
                    }
                });
            }

            google.maps.event.addDomListener(window, 'load', initialize);

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
