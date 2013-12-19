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

            echo $this->Html->css(array('style', 'jscrollpane', 'dp', 'basic', 'galleriffic-2', 'jscrollpane', 'dp', 'shCore', 'shThemeDefault'));
            echo $this->fetch('css');

            echo $this->Html->script(array('jquery.min.js', 'tabs', 'popup', 'modernizr.custom.79639', 'jquery.galleriffic.js', 'jquery.opacityrollover.js', 'jquery.mousewheel', 'jquery.jscrollpane', 'dropdown', 'jquery.datepicker.js', 'datepicker_lang_US.js'));
            echo $this->fetch('script');
        ?>

            <script type="text/javascript">
                SyntaxHighlighter.config.clipboardSwf = '../highlighter/scripts/clipboard.swf';
                SyntaxHighlighter.all();
            </script>
            <!--end code highlighter-->

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

                    jQuery("#datefrom").datepicker({ picker: "<img class='picker' align='middle' src='images/calendar.png' alt=''/>" });
                    jQuery("#dateto").datepicker({ picker: "<img class='picker' align='middle' src='images/calendar.png' alt=''/>" });

                    jQuery("#arrive").datepicker({ picker: "<img class='picker' align='middle' src='images/calendar.png' alt=''/>" });
                    jQuery("#depart").datepicker({ picker: "<img class='picker' align='middle' src='images/calendar.png' alt=''/>" });

                    jQuery('.scroll').jScrollPane(
                    {
                        showArrows: false,
                        arrowScrollOnHover: true,
                        verticalDragMinHeight: 30,
                        verticalDragMaxHeight: 30,
                        autoReinitialise: true,
                        verticalGutter: 50
                    }
                );
                    jQuery(".tabs ul").idTabs();

                    jQuery('#my_modal').popup();
                    jQuery('#my_modal1').popup();
                    jQuery('#my_modal2').popup();

                    jQuery('div.navigation').css({'width' : '225px', 'float' : 'right'});
                    jQuery('div.content').css('display', 'block');

                    var onMouseOutOpacity = 0.67;
                    jQuery('#thumbs ul.thumbs li').opacityrollover({
                        mouseOutOpacity:   onMouseOutOpacity,
                        mouseOverOpacity:  1.0,
                        fadeSpeed:         'fast',
                        exemptionSelector: '.selected'
                    });
                    var gallery = jQuery('#thumbs').galleriffic({
                        delay:                     2500,
                        numThumbs:                 15,
                        preloadAhead:              10,
                        enableTopPager:            false,
                        enableBottomPager:         true,
                        maxPagesToShow:            7,
                        imageContainerSel:         '#slideshow',
                        controlsContainerSel:      '#controls',
                        captionContainerSel:       '#caption',
                        loadingContainerSel:       '#loading',
                        renderSSControls:          true,
                        renderNavControls:         true,
                        playLinkText:              '',
                        pauseLinkText:             '',
                        prevLinkText:              '',
                        nextLinkText:              '',
                        nextPageLinkText:          '&rsaquo;',
                        prevPageLinkText:          '&lsaquo;',
                        enableHistory:             '',
                        autoStart:                 false,
                        syncTransitions:           true,
                        defaultTransitionDuration: 900,
                        onSlideChange:             function(prevIndex, nextIndex) {
                            // 'this' refers to the gallery, which is an extension of $('#thumbs')
                            this.find('ul.thumbs').children()
                            .eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
                            .eq(nextIndex).fadeTo('fast', 1.0);
                        },
                        onPageTransitionOut:       function(callback) {
                            this.fadeTo('fast', 0.0, callback);
                        },
                        onPageTransitionIn:        function() {
                            this.fadeTo('fast', 1.0);
                        }
                    });
                });
            </script>

        </head>

        <body>
            <div id="ie8"></div>
        <?php echo $this->element('menu') ?>
            <div id="bgWrap">
            <?php echo $content_for_layout ?>

            <div class="clear"></div>
        </div><!--end of bgWrap-->


        <div class="clear"></div>
        <?php echo $this->element('footer') ?>
    </body>
</html>
