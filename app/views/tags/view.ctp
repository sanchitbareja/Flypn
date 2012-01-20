<div class="tags view">
<h2><?php  __('Tag');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tag['Tag']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tag['Tag']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Longname'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tag['Tag']['longname']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tag', true), array('action' => 'edit', $tag['Tag']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Tag', true), array('action' => 'delete', $tag['Tag']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tag['Tag']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Uploads Ids', true), array('controller' => 'uploads_ids', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Uploads Id', true), array('controller' => 'uploads_ids', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Uploads Ids');?></h3>
	<?php if (!empty($tag['UploadsId'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Upload Id'); ?></th>
		<th><?php __('Tag Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tag['UploadsId'] as $uploadsId):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $uploadsId['id'];?></td>
			<td><?php echo $uploadsId['upload_id'];?></td>
			<td><?php echo $uploadsId['tag_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'uploads_ids', 'action' => 'view', $uploadsId['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'uploads_ids', 'action' => 'edit', $uploadsId['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'uploads_ids', 'action' => 'delete', $uploadsId['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $uploadsId['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Uploads Id', true), array('controller' => 'uploads_ids', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
