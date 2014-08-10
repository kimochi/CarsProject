
<div class="modeles view">
<h2><?php echo __('Modele'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($modele['Modele']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($modele['Modele']['name']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($modele['Modele']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mark'); ?></dt>
		<dd>
			<?php echo $this->Html->link($modele['Mark']['name'], array('controller' => 'marks', 'action' => 'view', $modele['Mark']['id'])); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($modele['Modele']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($modele['Modele']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Modele'), array('action' => 'edit', $modele['Modele']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Modele'), array('action' => 'delete', $modele['Modele']['id']), null, __('Are you sure you want to delete # %s?', $modele['Modele']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Modeles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Modele'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Marks'), array('controller' => 'marks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mark'), array('controller' => 'marks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehicles'), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle'), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Vehicles'); ?></h3>
	<?php if (!empty($modele['Vehicle'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Mark Id'); ?></th>
		<th><?php echo __('Modele Id'); ?></th>
		<th><?php echo __('Power'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Mileage'); ?></th>
		<th><?php echo __('Consumption'); ?></th>
		<th><?php echo __('Extcolor'); ?></th>
		<th><?php echo __('Intcolor'); ?></th>
		<th><?php echo __('Image'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Sold'); ?></th>
		<th><?php echo __('Sold Date'); ?></th>
		<th><?php echo __('Year'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Transmission'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($modele['Vehicle'] as $vehicle): ?>
		<tr>
			<td><?php echo $vehicle['id']; ?></td>
			<td><?php echo $vehicle['mark_id']; ?></td>
			<td><?php echo $vehicle['modele_id']; ?></td>
			<td><?php echo $vehicle['power']; ?></td>
			<td><?php echo $vehicle['price']; ?></td>
			<td><?php echo $vehicle['mileage']; ?></td>
			<td><?php echo $vehicle['consumption']; ?></td>
			<td><?php echo $vehicle['extcolor']; ?></td>
			<td><?php echo $vehicle['intcolor']; ?></td>
			<td><?php echo $vehicle['image']; ?></td>
			<td><?php echo $vehicle['description']; ?></td>
			<td><?php echo $vehicle['sold']; ?></td>
			<td><?php echo $vehicle['sold_date']; ?></td>
			<td><?php echo $vehicle['year']; ?></td>
			<td><?php echo $vehicle['created']; ?></td>
			<td><?php echo $vehicle['modified']; ?></td>
			<td><?php echo $vehicle['transmission']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'vehicles', 'action' => 'view', $vehicle['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'vehicles', 'action' => 'edit', $vehicle['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'vehicles', 'action' => 'delete', $vehicle['id']), null, __('Are you sure you want to delete # %s?', $vehicle['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Vehicle'), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
