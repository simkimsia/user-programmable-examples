<div class="actions columns large-2 medium-3">
	<h3><?= __('Actions') ?></h3>
	<ul class="side-nav">
		<li><?= $this->Html->link(__('New Context'), ['action' => 'add']) ?></li>
	</ul>
</div>
<div class="contexts index large-10 medium-9 columns">
	<table cellpadding="0" cellspacing="0">
	<thead>
		<tr>
			<th><?= $this->Paginator->sort('id') ?></th>
			<th><?= $this->Paginator->sort('lights') ?></th>
			<th><?= $this->Paginator->sort('left_incoming_traffic') ?></th>
			<th><?= $this->Paginator->sort('right_incoming_traffic') ?></th>
			<th class="actions"><?= __('Actions') ?></th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($contexts as $context): ?>
		<tr>
			<td><?= $this->Number->format($context->id) ?></td>
			<td><?= h($context->lights) ?></td>
			<td><?= $this->Number->format($context->left_incoming_traffic) ?></td>
			<td><?= $this->Number->format($context->right_incoming_traffic) ?></td>
			<td class="actions">
				<?= $this->Html->link(__('View'), ['action' => 'view', $context->id]) ?>
				<?= $this->Html->link(__('Edit'), ['action' => 'edit', $context->id]) ?>
				<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $context->id], ['confirm' => __('Are you sure you want to delete # {0}?', $context->id)]) ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
	<div class="paginator">
		<ul class="pagination">
		<?php
			echo $this->Paginator->prev('< ' . __('previous'));
			echo $this->Paginator->numbers();
			echo $this->Paginator->next(__('next') . ' >');
		?>
		</ul>
		<p><?= $this->Paginator->counter() ?></p>
	</div>
</div>
