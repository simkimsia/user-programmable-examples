<div class="actions columns large-2 medium-3">
	<h3><?= __('Actions') ?></h3>
	<ul class="side-nav">
		<li><?= $this->Html->link(__('New Rules Apply On Context'), ['action' => 'add']) ?></li>
		<li><?= $this->Html->link(__('List Rules'), ['controller' => 'Rules', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Rule'), ['controller' => 'Rules', 'action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('List Contexts'), ['controller' => 'Contexts', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Context'), ['controller' => 'Contexts', 'action' => 'add']) ?> </li>
	</ul>
</div>
<div class="rulesApplyOnContexts index large-10 medium-9 columns">
	<table cellpadding="0" cellspacing="0">
	<thead>
		<tr>
			<th><?= $this->Paginator->sort('id') ?></th>
			<th><?= $this->Paginator->sort('rule_id') ?></th>
			<th><?= $this->Paginator->sort('context_id') ?></th>
			<th><?= $this->Paginator->sort('pass') ?></th>
			<th class="actions"><?= __('Actions') ?></th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($rulesApplyOnContexts as $rulesApplyOnContext): ?>
		<tr>
			<td><?= $this->Number->format($rulesApplyOnContext->id) ?></td>
			<td>
				<?= $rulesApplyOnContext->has('rule') ? $this->Html->link($rulesApplyOnContext->rule->id, ['controller' => 'Rules', 'action' => 'view', $rulesApplyOnContext->rule->id]) : '' ?>
			</td>
			<td>
				<?= $rulesApplyOnContext->has('context') ? $this->Html->link($rulesApplyOnContext->context->id, ['controller' => 'Contexts', 'action' => 'view', $rulesApplyOnContext->context->id]) : '' ?>
			</td>
			<td><?= h($rulesApplyOnContext->pass) ?></td>
			<td class="actions">
				<?= $this->Html->link(__('View'), ['action' => 'view', $rulesApplyOnContext->id]) ?>
				<?= $this->Html->link(__('Edit'), ['action' => 'edit', $rulesApplyOnContext->id]) ?>
				<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rulesApplyOnContext->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rulesApplyOnContext->id)]) ?>
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
