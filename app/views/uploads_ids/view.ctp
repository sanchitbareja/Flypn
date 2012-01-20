<div class="uploadsIds view">
<h2><?php  __('Uploads Id');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $uploadsId['UploadsId']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Upload'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($uploadsId['Upload']['title'], array('controller' => 'uploads', 'action' => 'view', $uploadsId['Upload']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tag'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($uploadsId['Tag']['name'], array('controller' => 'tags', 'action' => 'view', $uploadsId['Tag']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Uploads Id', true), array('action' => 'edit', $uploadsId['UploadsId']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Uploads Id', true), array('action' => 'delete', $uploadsId['UploadsId']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $uploadsId['UploadsId']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Uploads Ids', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Uploads Id', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Uploads', true), array('controller' => 'uploads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Upload', true), array('controller' => 'uploads', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags', true), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag', true), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
