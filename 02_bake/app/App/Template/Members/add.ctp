<div class="members form">
<?= $this->Form->create($member); ?>
	<fieldset>
		<legend><?= __('Add Member'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('age');
		echo $this->Form->input('tel');
	?>
	</fieldset>
<?= $this->Form->button(__('Submit')); ?>
<?= $this->Form->end(); ?>
</div>
<div class="actions">
	<h3><?= __('Actions'); ?></h3>
	<ul>
		<li><?= $this->Html->link(__('List Members'), ['action' => 'index']); ?></li>
	</ul>
</div>
