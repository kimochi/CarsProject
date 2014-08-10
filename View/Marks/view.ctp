
<div class="marks view">
<h2><?php echo __('Mark'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($mark['Mark']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($mark['Mark']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo h($mark['Mark']['image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($mark['Mark']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($mark['Mark']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mark'), array('action' => 'edit', $mark['Mark']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mark'), array('action' => 'delete', $mark['Mark']['id']), null, __('Are you sure you want to delete # %s?', $mark['Mark']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Marks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mark'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Modeles'), array('controller' => 'modeles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Modele'), array('controller' => 'modeles', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Modeles'); ?></h3>
	<?php if (!empty($mark['Modele'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Year'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Mark Id'); ?></th>
		<th><?php echo __('Fuel Id'); ?></th>
		<th><?php echo __('Type Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($mark['Modele'] as $modele): ?>
		<tr>
			<td><?php echo $modele['id']; ?></td>
			<td><?php echo $modele['name']; ?></td>
			<td><?php echo $modele['year']; ?></td>
			<td><?php echo $modele['description']; ?></td>
			<td><?php echo $modele['mark_id']; ?></td>
			<td><?php echo $modele['fuel_id']; ?></td>
			<td><?php echo $modele['type_id']; ?></td>
			<td><?php echo $modele['created']; ?></td>
			<td><?php echo $modele['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'modeles', 'action' => 'view', $modele['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'modeles', 'action' => 'edit', $modele['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'modeles', 'action' => 'delete', $modele['id']), null, __('Are you sure you want to delete # %s?', $modele['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Modele'), array('controller' => 'modeles', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
