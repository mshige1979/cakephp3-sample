<div class="members index">
	<h2><?= __('Members'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?= $this->Paginator->sort('id'); ?></th>
		<th><?= $this->Paginator->sort('name'); ?></th>
		<th><?= $this->Paginator->sort('age'); ?></th>
		<th><?= $this->Paginator->sort('tel'); ?></th>
		<th><?= $this->Paginator->sort('created'); ?></th>
		<th><?= $this->Paginator->sort('modified'); ?></th>
		<th class="actions"><?= __('Actions'); ?></th>
	</tr>
	<?php foreach ($members as $member): ?>
	<tr>
		<td><?= h($member->id); ?>&nbsp;</td>
		<td><?= h($member->name); ?>&nbsp;</td>
		<td><?= h($member->age); ?>&nbsp;</td>
		<td><?= h($member->tel); ?>&nbsp;</td>
		<td><?= h($member->created); ?>&nbsp;</td>
		<td><?= h($member->modified); ?>&nbsp;</td>
		<td class="actions">
			<?= $this->Html->link(__('View'), ['action' => 'view', $member->id]); ?>
			<?= $this->Html->link(__('Edit'), ['action' => 'edit', $member->id]); ?>
			<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $member->id], [], __('Are you sure you want to delete # %s?', $member->id)); ?>
		</td>
	</tr>
	<?php endforeach; ?>
	</table>
	<p><?= $this->Paginator->counter(); ?></p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'));
		echo $this->Paginator->numbers();
		echo $this->Paginator->next(__('next') . ' >');
	?>
	</div>
</div>
<div class="actions">
	<h3><?= __('Actions'); ?></h3>
	<ul>
		<li><?= $this->Html->link(__('New Member'), ['action' => 'add']); ?></li>
	</ul>
</div>
