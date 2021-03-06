<?php echo $this->Html->script(array('raty/lib/jquery.raty.min')); ?>
<?php echo $this->Html->script(array('ajax-loader')); ?>
<div id="content" class="property ratings">
    <div class="title">
        <h1>Sort By:</h1>
        <div class="prices" style="width:80%;">TYPE: 
            <div id="dd5" class="wrapper-dropdown-1" tabindex="1" style="z-index: 99991;">
                <span id="sort-type-span" data-val="asc">SELECT</span>
                <ul class="dropdown" tabindex="1" id="sort-type" data-sort="type">
                    <li><a href="#" data-val="rent">FOR RENT</a></li>
                    <li><a href="#" data-val="sale">FOR SALE</a></li>
                </ul>
            </div>
        </div>
        <div class="prices">PRICE: 
            <div id="dd1" class="wrapper-dropdown-1" tabindex="1">
                <span id="sort-price-span" data-val="asc">SELECT</span>
                <ul class="dropdown" tabindex="1" id="sort-price" data-sort="price">
                    <li><a href="#" data-val="asc">LOWEST TO HIGHEST</a></li>
                    <li><a href="#" data-val="desc">HIGHEST TO LOWEST</a></li>
                </ul>
            </div>
        </div>
        <div class="star">STAR RATING: 
            <div id="dd2" class="wrapper-dropdown-1" tabindex="1">
                <span id="sort-rating-span" data-val="asc">SELECT</span>
                <ul class="dropdown" tabindex="1" id="sort-rating" data-sort="star_rating">
                    <li><a href="#" data-val="asc">LOWEST TO HIGHEST</a></li>
                    <li><a href="#" data-val="desc">HIGHEST TO LOWEST</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div class="scrolling">
        <?php echo $this->element('property_list', array('properties' => $properties)) ?>
    </div>
<!--    <img src="<?php echo $this->webroot; ?>images/ajax-loader.gif" />-->
</div>

<script type="text/javascript">
    jQuery(document).ready(function(){
<?php foreach ($properties as $p) { ?>
            jQuery(".star-rating").each(function(){jQuery(this).raty({score: jQuery(this).attr('data-rating'), readOnly: true, space:false, size: 10, width: 65, starOff: "<?php echo $this->webroot; ?>images/smallstar-off.png", starOn: "<?php echo $this->webroot; ?>images/smallstar-on.png", starHalf: "<?php echo $this->webroot; ?>images/smallstar-half.png"});})
<?php } ?>
    });
    jQuery('#sort-type li a').click(function(){
            $this = jQuery(this);
            jQuery('.property.ratings').css('position', 'relative');
            loader = new ajaxLoader('.property.ratings',{bgColor: '#000',  opacity: '0.3', top: '190px'});
            jQuery.ajax({
                type: "POST",
                data: {type: $this.data('val'), order: jQuery('#sort-price-span').data('val'), type: $this.data('val')},
                url: '<?php echo APP_URL . 'properties/disp_property_list'; ?>',
                success: function(d){
                    jQuery('#sort-type-span').data('val', $this.data('val'));
                    jQuery('.scrolling').html(d);
                    jQuery(".star-rating").each(function(){jQuery(this).raty({score: jQuery(this).attr('data-rating'), readOnly: true, space:false, size: 10, width: 65, starOff: "<?php echo $this->webroot; ?>images/smallstar-off.png", starOn: "<?php echo $this->webroot; ?>images/smallstar-on.png", starHalf: "<?php echo $this->webroot; ?>images/smallstar-half.png"});})
                    
                    var dH = jQuery('div.star');
                    var dL = dH.is(":visible");
                    if($this.data('val') == 'sale'){
                        if(dL){
                            dH.hide();
                        }
                    }else{
                        if(!dL){
                            dH.show();
                        }
                    }
                    loader.remove();
                }
        })
        
    });
    jQuery('#sort-price li a, #sort-rating li a').click(function(){
        jQuery('.property.ratings').css('position', 'relative');
        loader = new ajaxLoader('.property.ratings',{bgColor: '#000',  opacity: '0.3'});
        $this = jQuery(this);
        jQuery.ajax({
            type: "POST",
            data: {type:jQuery('#sort-type-span').data('val'), sort: $this.parents('ul').data('sort'), order: $this.data('val'), type: jQuery('#property_type').val()},
            url: '<?php echo APP_URL . 'properties/disp_property_list'; ?>',
            success: function(d){
                var sp = $this.parents('ul').siblings( "span" );
                sp.data('val', $this.data('val'));
                jQuery('.scrolling').html(d);
                jQuery(".star-rating").each(function(){jQuery(this).raty({score: jQuery(this).attr('data-rating'), readOnly: true, space:false, size: 10, width: 65, starOff: "<?php echo $this->webroot; ?>images/smallstar-off.png", starOn: "<?php echo $this->webroot; ?>images/smallstar-on.png", starHalf: "<?php echo $this->webroot; ?>images/smallstar-half.png"});})
                loader.remove();
            }
        });
    });
</script>