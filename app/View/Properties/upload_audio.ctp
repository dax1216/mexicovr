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
                <div class="list" id="photoupload">
                    <div class="upload-wrapper"><?php echo $this->Form->input('audio',array('label' => false,'type'=>'file','div'=>false,'class'=>'property-photo')); ?></div>
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