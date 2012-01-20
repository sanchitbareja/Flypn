<div class="personalmessages form">
<?php echo $this->Form->create('Personalmessage');?>
	<fieldset>
		<legend><?php __('Add Personalmessage'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Personalmessages', true), array('action' => 'index'));?></li>
	</ul>
</div>