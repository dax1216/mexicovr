<script type="text/javascript">
    CKEDITOR.replace( 'content',
        {
            toolbar :
            [
                ['Source'],
                ['Bold','Italic','Underline','Strike'],
           ],
                height: "200px",
                width: "100px"
        });
</script>
<?php
echo $this->Form->create('Pages', array(
    'inputDefaults' => array(
        'label' => false,
        'div' => false
    )
));
?>

<div id="admin-content" style="padding: 25px;">
<div class="pages form">
<?php echo $this->Form->create('Page'); ?>
	Title:
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title',array('label' => ''));
	?><br/>
        Content:
                 <?php echo $this->Form->textarea('content', array("class"=>"ckeditor")); ?>
	<br/>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
    <br/>
    <br/>

<?php echo $this->Html->link(__('List Pages'), array('action' => 'index')); ?> 
</div>