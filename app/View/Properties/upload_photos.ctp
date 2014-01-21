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
                <?php if($sess_photos){?>
                    <?php foreach($sess_photos as $key=>$photo){ ?>
                        <?php 
                                    $image = $photo;
                                    $imgFile = '';
                                    $ext = '';
                                    if ($image != '') {
                                        $imgFile = substr($image, 0, -4);
                                        $ext = substr($image, -3);
                                    }
                                ?>
                        <div style="margin-bottom: 10px;" id="p_<?php echo $key; ?>">
                            <img src="<?php echo $this->webroot.$imgFile.'-resize-65x60-s.'.$ext; ?>"/>
                            <input type="button" value="remove" data-photo="<?php echo $key; ?>" class="remove-photo"/>
                        </div>
                    <?php } ?>
                <?php } ?>
                <div class="list" id="photoupload">
                    <div class="upload-wrapper"><?php echo $this->Form->input('photo[0]',array('label' => false,'type'=>'file','div'=>false,'class'=>'property-photo','name'=>'data[photo][0]')); ?></div>
<!--                    <input name="photo_0" type="file" /> -->
<!--                    <input type="button" value="BROWSE" class="browse" />-->
                    <span class="attach"><a href="#" id="attach-more">Attach more files</a></span>
                </div>
                <div class="clear"></div>
            </div>		
            <div class="buttons">
                <?php if($preview){ ?>
                    <span class="next"><input type="submit" class="btnnext" value="SUBMIT" /></span>
                <?php }else {?>
                    <span class="back"><input type="button" class="btnback" value="<< BACK" onclick="window.location = '<?php echo $sess_listing_type=='rent'?APP_URL.'properties/rates':APP_URL.'properties/rate'; ?>'"/></span>
                    <span class="next"><input type="submit" class="btnnext" value="NEXT >>" /></span>
                <?php } ?>
            </div>
        <?php echo $this->Form->end(); ?>
    </div>
</div>
<script type="text/javascript">
    jQuery('#attach-more').click(function(e){
        var clone = jQuery('div#photoupload').find('div.upload-wrapper').last().clone();
        var cnt = jQuery('input.property-photo').length;
        var limit = parseInt(<?php echo $photo_limit; ?>);
        var cloneInput = clone.find('input.property-photo').first();
        cloneInput.attr('name','data[photo]['+cnt+']');
        cloneInput.attr('id','PropertiesPhoto['+cnt+']');
        cloneInput.val('');
        jQuery(this).parent('span.attach').before(clone);
        if(cnt+1==limit){
            jQuery(this).remove();
        }
        e.preventDefault();
    });
    
    jQuery('.remove-photo').click(function(){
        var didConfirm = confirm("Are you sure?");
        if (didConfirm == true) {
            var pid = jQuery(this).attr('data-photo');
            jQuery.ajax({
                type: "POST",
                url: '<?php echo APP_URL . 'tmp_upload_photos/delete/'; ?>'+pid,
                success: function(d){
                    console.info(d);
                      jQuery('#p_'+pid).remove();
//                    jQuery('#contact-wrapper').html(d.message);
                },
                dataType: 'json'

            });
        }
    })
</script>