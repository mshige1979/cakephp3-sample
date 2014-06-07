<div class="members view">
	<h2><?= __('Member'); ?></h2>
	<dl>
		<dt><?= __('Id'); ?></dt>
		<dd>
			<?= h($member->id); ?>
			&nbsp;
		</dd>
		<dt><?= __('Name'); ?></dt>
		<dd>
			<?= h($member->name); ?>
			&nbsp;
		</dd>
		<dt><?= __('Age'); ?></dt>
		<dd>
			<?= h($member->age); ?>
			&nbsp;
		</dd>
		<dt><?= __('Tel'); ?></dt>
		<dd>
			<?= h($member->tel); ?>
			&nbsp;
		</dd>
		<dt><?= __('Created'); ?></dt>
		<dd>
			<?= h($member->created); ?>
			&nbsp;
		</dd>
		<dt><?= __('Modified'); ?></dt>
		<dd>
			<?= h($member->modified); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?= __('Actions'); ?></h3>
	<ul>
		<li><?= $this->Html->link(__('Edit Member'), ['action' => 'edit', $member->id]); ?> </li>
		<li><?= $this->Form->postLink(__('Delete Member'), ['action' => 'delete', $member->id], [], __('Are you sure you want to delete # %s?', $member->id)); ?> </li>
		<li><?= $this->Html->link(__('List Members'), ['action' => 'index']); ?> </li>
		<li><?= $this->Html->link(__('New Member'), ['action' => 'add']); ?> </li>
	</ul>
</div>
