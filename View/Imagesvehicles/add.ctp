
<?php echo $this->Html->script('jquery'); ?>
<?php echo $this->Html->script('jquery.ui'); ?>
<script> 
$(document).ready(function(){
	//'uploader' : 'uploadifyit/uploadify.swf'
});
</script>
<div class="imagesvehicles form">
<?php echo $this->Form->create('Imagesvehicle',array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Imagesvehicle'); ?></legend>
	<?php
		echo $this->Form->input('image_file',array('type'=>'file','id'=>'file_upload'));
		echo $this->Form->input('vehicle_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Imagesvehicles'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Vehicles'), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle'), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
	</ul>
</div>
<script>
	
</script>