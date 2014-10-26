<div class="actions columns large-2 medium-3">
	<h3><?= __('Actions') ?></h3>
	<ul class="side-nav">
		<li><?= $this->Html->link(__('Edit Rules Apply On Context'), ['action' => 'edit', $rulesApplyOnContext->id]) ?> </li>
		<li><?= $this->Form->postLink(__('Delete Rules Apply On Context'), ['action' => 'delete', $rulesApplyOnContext->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rulesApplyOnContext->id)]) ?> </li>
		<li><?= $this->Html->link(__('List Rules Apply On Contexts'), ['action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Rules Apply On Context'), ['action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('List Rules'), ['controller' => 'Rules', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Rule'), ['controller' => 'Rules', 'action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('List Contexts'), ['controller' => 'Contexts', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Context'), ['controller' => 'Contexts', 'action' => 'add']) ?> </li>
	</ul>
</div>
<div class="rulesApplyOnContexts view large-10 medium-9 columns">
	<h2><?= h($rulesApplyOnContext->id) ?></h2>
	<div class="row">
		<div class="large-5 columns strings">
			<h6 class="subheader"><?= __('Rule') ?></h6>
			<p><?= $rulesApplyOnContext->has('rule') ? $this->Html->link($rulesApplyOnContext->rule->id, ['controller' => 'Rules', 'action' => 'view', $rulesApplyOnContext->rule->id]) : '' ?></p>
			<h6 class="subheader"><?= __('Context') ?></h6>
			<p><?= $rulesApplyOnContext->has('context') ? $this->Html->link($rulesApplyOnContext->context->id, ['controller' => 'Contexts', 'action' => 'view', $rulesApplyOnContext->context->id]) : '' ?></p>
		</div>
		<div class="large-2 large-offset-1 columns numbers end">
			<h6 class="subheader"><?= __('Id') ?></h6>
			<p><?= $this->Number->format($rulesApplyOnContext->id) ?></p>
		</div>
		<div class="large-2 columns booleans end">
			<h6 class="subheader"><?= __('Pass') ?></h6>
			<p><?= $rulesApplyOnContext->pass ? __('Yes') : __('No'); ?></p>
		</div>
	</div>
</div>
