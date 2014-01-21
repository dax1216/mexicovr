<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div id="content">
    <div id="contact" class="photos">
        <h1 class="title">Audio of your listing</h1>
        <?php echo $this->Form->create('Properties', array('type' => 'file')); ?>
            <div class="form">
                <p><em>Upload audio</em></p>
                <div class="line-black"></div>
                <?php if($sess_audio){?>
                    <?php foreach($sess_audio as $key=>$audio){ ?>
                        
                        <div style="margin-bottom: 10px;" id="p_<?php echo $key; ?>">
                            <object data="<?php echo $this->webroot.$audio; ?>"></object>
                        </div>
                    <?php } ?>
                <?php } ?>
                <div class="list" id="photoupload">
                    <div class="upload-wrapper"><?php echo $this->Form->input('audio',array('label' => false,'type'=>'file','div'=>false,'class'=>'property-photo')); ?></div>
                </div>
                <div class="clear"></div>
            </div>		
            <div class="buttons">
                <span class="back"><input type="button" class="btnback" value="<< BACK" onclick="window.location = '<?php echo APP_URL.'properties/upload_photos'; ?>'"/></span>
                <span class="next"><input type="submit" class="btnnext" value="NEXT >>" /></span>
            </div>
        <?php echo $this->Form->end(); ?>
    </div>
</div>