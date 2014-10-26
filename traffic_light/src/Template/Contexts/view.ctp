<div class="actions columns large-2 medium-3">
	<h3><?= __('Actions') ?></h3>
	<ul class="side-nav">
		<li><?= $this->Html->link(__('Edit Context'), ['action' => 'edit', $context->id]) ?> </li>
		<li><?= $this->Form->postLink(__('Delete Context'), ['action' => 'delete', $context->id], ['confirm' => __('Are you sure you want to delete # {0}?', $context->id)]) ?> </li>
		<li><?= $this->Html->link(__('List Contexts'), ['action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Context'), ['action' => 'add']) ?> </li>
	</ul>
</div>
<div class="contexts view large-10 medium-9 columns">
	<h2><?= h($context->id) ?></h2>
	<div class="row">
		<div class="large-5 columns strings">
			<h6 class="subheader"><?= __('Lights') ?></h6>
			<p><?= h($context->lights) ?></p>
		</div>
		<div class="large-2 large-offset-1 columns numbers end">
			<h6 class="subheader"><?= __('Id') ?></h6>
			<p><?= $this->Number->format($context->id) ?></p>
			<h6 class="subheader"><?= __('Left Incoming Traffic') ?></h6>
			<p><?= $this->Number->format($context->left_incoming_traffic) ?></p>
			<h6 class="subheader"><?= __('Right Incoming Traffic') ?></h6>
			<p><?= $this->Number->format($context->right_incoming_traffic) ?></p>
		</div>
	</div>
</div>
