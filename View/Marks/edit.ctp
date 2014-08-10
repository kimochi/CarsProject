
<div class="marks form">
<?php echo $this->Form->create('Mark',array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Edit Mark'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('image_file',array('type'=>'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Mark.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Mark.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Marks'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Modeles'), array('controller' => 'modeles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Modele'), array('controller' => 'modeles', 'action' => 'add')); ?> </li>
	</ul>
</div>
