<div id="content" class="features advertising">
    <div class="title">
        <h1>Advertising</h1>
        <div class="line"></div>
    </div>
    <div class="left">
        <?php $pId = isset($advertisement['Advertisement']['id'])?$advertisement['Advertisement']['id']:'' ?>
        <?php echo $this->Form->create('Advertisement', array('type' => 'file', 'action' => 'advertising_advertise/'.$pId)); ?>
        <div class="box boxs" style="margin-left: 25px;" id="ad-form">
            
                <div class="title">
                    <?php echo $this->Form->input('title', array('placeholder' => 'TITLE', 'label' => false, 'class'=>'titles', 'value'=>isset($advertisement['Advertisement']['title'])?$advertisement['Advertisement']['title']:'')); ?>
                </div>
                <div class="images">
                    <?php if(isset($advertisement['Advertisement']['image_small'])){ ?>
                        <img src="<?php echo $this->webroot.$advertisement['Advertisement']['image_small']; ?>"/>
                        <?php echo $this->Form->input('image_2', array('label' => false, 'type'=>'file', 'style'=>'margin-left:20px; width: 185px;')); ?>
                    <?php }else{ ?>
                        <?php echo $this->Form->input('image', array('label' => false, 'style'=>'margin:65px 0 0 20px; width: 185px;', 'type'=>'file')); ?>
                    <?php } ?>
                </div>
                <div class="text">
                    <?php echo $this->Form->input('description1', array('placeholder' => 'DESCRIPTION', 'label' => false, 'class'=>'area', 'type'=>'textarea', 'value'=>isset($advertisement['Advertisement']['description1'])?$advertisement['Advertisement']['description1']:'')); ?>
                    <div class="lines"></div>
                    <?php echo $this->Form->input('address', array('placeholder' => 'ADDRESS', 'label' => false, 'class'=>'address', 'value'=>isset($advertisement['Advertisement']['address'])?$advertisement['Advertisement']['address']:'')); ?>
                    <div class="lines"></div>
                    <?php echo $this->Form->input('contact_number', array('placeholder' => 'PHONE #', 'label' => false, 'class'=>'phone', 'value'=>isset($advertisement['Advertisement']['contact_number'])?$advertisement['Advertisement']['contact_number']:'')); ?>
                </div>
        </div>
        <div class="button">
            <span class="sub"><input type="submit" value="NEXT" class="btnPre"/></span>
        </div>
        <?php echo $this->Form->end(); ?>
    </div>
    <div class="right">
        <div id="content">
            <div class="title">
                <h1>Features</h1>
            </div>
            <div class="white">
                <div class="scroll">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.mmodo consequat.</p>

                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p> 

                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>

                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>

                    <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>

                    <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    jQuery('[placeholder]').focus(function() {
  var input = jQuery(this);
  if (input.val() == input.attr('placeholder')) {
    input.val('');
    input.removeClass('placeholder');
  }
}).blur(function() {
  var input = jQuery(this);
  if (input.val() == '' || input.val() == input.attr('placeholder')) {
    input.addClass('placeholder');
    input.val(input.attr('placeholder'));
  }
}).blur();
jQuery('[placeholder]').parents('form').submit(function() {
  jQuery(this).find('[placeholder]').each(function() {
    var input = jQuery(this);
    if (input.val() == input.attr('placeholder')) {
      input.val('');
    }
  })
});
</script>