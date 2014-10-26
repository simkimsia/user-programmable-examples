<div class="actions columns large-2 medium-3">
	<h3><?= __('Actions') ?></h3>
	<ul class="side-nav">
		<li><?= $this->Html->link(__('Edit Rule'), ['action' => 'edit', $rule->id]) ?> </li>
		<li><?= $this->Form->postLink(__('Delete Rule'), ['action' => 'delete', $rule->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rule->id)]) ?> </li>
		<li><?= $this->Html->link(__('List Rules'), ['action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Rule'), ['action' => 'add']) ?> </li>
	</ul>
</div>
<div class="rules view large-10 medium-9 columns">
	<h2><?= h($rule->id) ?></h2>
	<div class="row">
		<div class="large-2 large-offset-1 columns numbers end">
			<h6 class="subheader"><?= __('Id') ?></h6>
			<p><?= $this->Number->format($rule->id) ?></p>
		</div>
	</div>
	<div class="row texts">
		<div class="columns large-9">
			<h6 class="subheader"><?= __('Rule') ?></h6>
			<?= $this->Text->autoParagraph(h($rule->rule)); ?>
		</div>
	</div>
</div>
