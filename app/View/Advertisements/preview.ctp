<div class="advertisements view">
    <h2><?php echo __('Advertisement'); ?></h2>
    <dl>

        <dt><?php echo __('Title'); ?></dt>
        <dd>
            <?php echo h($advertisement['Advertisement']['title']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Image'); ?></dt>
        <dd>
            <img src="<?php echo $this->webroot.h($advertisement['Advertisement']['image_small']); ?>" />
            &nbsp;
        </dd>
        <dt><?php echo __('Description1'); ?></dt>
        <dd>
            <?php echo h($advertisement['Advertisement']['description1']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Description2'); ?></dt>
        <dd>
            <?php echo h($advertisement['Advertisement']['description2']); ?>
            &nbsp;
        </dd>
    </dl>
</div