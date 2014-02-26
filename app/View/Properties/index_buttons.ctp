<?php echo $this->Html->script(array('raty/lib/jquery.raty.min')); ?>
<?php echo $this->Html->script(array('ajax-loader')); ?>
<div id="content" class="property ratings">
    <div style="text-align: center; margin-top: 100px;" class="property-index">
        <p><a href="<?php echo $this->webroot ?>properties/rent_a_property<?php echo isset($destination)?'?destination='.$destination:'?destination='; ?><?php echo isset($bedrooms)?'&bedrooms='.$bedrooms:''; ?>" class="search-rentprop rent-current"></a></p>
        <p><a href="<?php echo $this->webroot ?>properties/buy_a_property<?php echo isset($destination)?'?destination='.$destination:'?destination='; ?><?php echo isset($bedrooms)?'&bedrooms='.$bedrooms:''; ?>" class="search-buyprop"></a></p>
    </div>
</div>