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
                <p><em>Enter Video URL</em></p>
                <div class="line-black"></div>
                <?php if(isset($sess_video)){ ?>
                    <!------ Video ------->
                    <iframe title="YouTube video player" class="youtube-player" type="text/html" 
        width="420" height="345" src="<?php echo $sess_video; ?>"
        frameborder="0" allowFullScreen></iframe>

                <?php } ?>
                <div class="list" id="photoupload">
                    <div class="upload-wrapper"><?php echo $this->Form->input('video',array('label' => false,'div'=>false,'class'=>'property-photo', 'value'=>$sess_video?$sess_video:'')); ?></div>
<!--                    <input name="photo_0" type="file" /> -->
<!--                    <input type="button" value="BROWSE" class="browse" />-->
<!--                    <span class="attach"><a href="#" id="attach-more">Attach more files</a></span>-->
                </div>
                <div class="clear"></div>
            </div>		
            <div class="buttons">
                <span class="back"><input type="button" class="btnback" value="<< BACK" onclick="window.location = '<?php echo APP_URL.'properties/upload_audio'; ?>'"/></span>
                <span class="next"><input type="submit" class="btnnext" value="NEXT >>" /></span>
            </div>
        <?php echo $this->Form->end(); ?>
    </div>
</div>