<div class="personalmessages form">
<?php echo $this->Form->create('Personalmessage');?>
	<fieldset>
		<legend><?php __('Edit Personalmessage'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('sender_email');
		echo $this->Form->input('recipient_email');
		echo $this->Form->input('body');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Personalmessage.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Personalmessage.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Personalmessages', true), array('action' => 'index'));?></li>
	</ul>
</div>