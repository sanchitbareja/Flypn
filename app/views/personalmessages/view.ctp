<div class="personalmessages view">
<h2><?php  __('Personalmessage');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $personalmessage['Personalmessage']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sender Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $personalmessage['Personalmessage']['sender_email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Recipient Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $personalmessage['Personalmessage']['recipient_email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Body'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $personalmessage['Personalmessage']['body']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $personalmessage['Personalmessage']['created']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Personalmessage', true), array('action' => 'edit', $personalmessage['Personalmessage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Personalmessage', true), array('action' => 'delete', $personalmessage['Personalmessage']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $personalmessage['Personalmessage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Personalmessages', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personalmessage', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
