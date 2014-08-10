<div class="imagesvehicles view">
<h2><?php echo __('Imagesvehicle'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($imagesvehicle['Imagesvehicle']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo h($imagesvehicle['Imagesvehicle']['image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vehicle'); ?></dt>
		<dd>
			<?php echo $this->Html->link($imagesvehicle['Vehicle']['id'], array('controller' => 'vehicles', 'action' => 'view', $imagesvehicle['Vehicle']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Imagesvehicle'), array('action' => 'edit', $imagesvehicle['Imagesvehicle']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Imagesvehicle'), array('action' => 'delete', $imagesvehicle['Imagesvehicle']['id']), null, __('Are you sure you want to delete # %s?', $imagesvehicle['Imagesvehicle']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Imagesvehicles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Imagesvehicle'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehicles'), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle'), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
	</ul>
</div>
