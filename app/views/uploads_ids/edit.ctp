<div class="uploadsIds form">
<?php echo $this->Form->create('UploadsId');?>
	<fieldset>
		<legend><?php __('Edit Uploads Id'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('upload_id');
		echo $this->Form->input('tag_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('UploadsId.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('UploadsId.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Uploads Ids', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Uploads', true), array('controller' => 'uploads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Upload', true), array('controller' => 'uploads', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags', true), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag', true), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>