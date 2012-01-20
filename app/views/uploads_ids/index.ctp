<div class="uploadsIds index">
	<h2><?php __('Uploads Ids');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('upload_id');?></th>
			<th><?php echo $this->Paginator->sort('tag_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($uploadsIds as $uploadsId):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $uploadsId['UploadsId']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($uploadsId['Upload']['title'], array('controller' => 'uploads', 'action' => 'view', $uploadsId['Upload']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($uploadsId['Tag']['name'], array('controller' => 'tags', 'action' => 'view', $uploadsId['Tag']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $uploadsId['UploadsId']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $uploadsId['UploadsId']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $uploadsId['UploadsId']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $uploadsId['UploadsId']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Uploads Id', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Uploads', true), array('controller' => 'uploads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Upload', true), array('controller' => 'uploads', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags', true), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag', true), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>