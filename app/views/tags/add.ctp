<div class="tags form">
<?php echo $this->Form->create('Tag');?>
	<fieldset>
		<legend><?php __('Add Tag'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('longname');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tags', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Uploads Ids', true), array('controller' => 'uploads_ids', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Uploads Id', true), array('controller' => 'uploads_ids', 'action' => 'add')); ?> </li>
	</ul>
</div>