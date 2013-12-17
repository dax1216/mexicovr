<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div id="content">
    <div id="contact" class="photos">
        <h1 class="title">Photos of your listing</h1>
        <?php echo $this->Form->create('Properties', array('type' => 'file')); ?>
            <div class="form">
                <p><em>Upload photos</em></p>
                <div class="line-black"></div>
                <div class="list" id="photoupload">
                    <?php echo $this->Form->input('photo[0]',array('label' => false,'type'=>'file','div'=>false,'class'=>'property-photo')); ?>
<!--                    <input name="photo_0" type="file" /> -->
<!--                    <input type="button" value="BROWSE" class="browse" />-->
                    <span class="attach"><a href="#" id="attach-more">Attach more files</a></span>
                </div>
                <div class="clear"></div>
            </div>		
            <div class="buttons">
                <a href="listing-rate.html"><span class="back"><input type="button" class="btnback" value="<< BACK" /></span></a>
                <span class="next"><input type="submit" class="btnnext" value="NEXT >>" /></span>
            </div>
        <?php echo $this->Form->end(); ?>
    </div>
</div>
<script type="text/javascript">
    jQuery('#attach-more').click(function(e){
        var clone = jQuery('div#photoupload').find('input').last().clone();
        var cnt = jQuery('input.property-photo').length;
        var limit = parseInt(<?php echo $photo_limit; ?>);
        clone.attr('name','photo['+cnt+']');
        jQuery(this).parent('span.attach').before(clone);
        if(cnt+1==limit){
            jQuery(this).remove();
        }
        e.preventDefault();
    })
</script>