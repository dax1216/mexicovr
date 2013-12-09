<div id="content">
    <div id="contact" class="rate">
        <h1 class="title">Rates for your listing</h1>
        <div class="form">
            <?php echo $this->Form->create('Property', array('action' => 'rate')); ?>
                <div class="line-black"></div>
                <div class="list">
                    <h3>List Price of Your Property</h3>
                    <span>$</span><?php echo $this->Form->input('rate', array('type' => 'text', 'label' => false, 'div' => false)); ?>
                </div>
         <?php echo $this->Form->end(); ?>
            <div class="clear"></div>
        </div>
        <div class="buttons">
          <span class="back"> <input type="submit" class="btnback" value="BACK" onClick="history.back();"/> </span>
                <span class="next"><input type="submit" class="btnnext" value="NEXT" /></span>
        </div>
    </div>

</div>

