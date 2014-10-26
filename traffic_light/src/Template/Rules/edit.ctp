<div class="actions columns large-2 medium-3">
	<h3><?= __('Actions') ?></h3>
	<ul class="side-nav">
		<li><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rule->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rule->id)]) ?></li>
		<li><?= $this->Html->link(__('List Rules'), ['action' => 'index']) ?></li>
	</ul>
</div>
<div class="rules form large-10 medium-9 columns">
<?= $this->Form->create($rule) ?>
	<fieldset>
		<legend><?= __('Edit Rule') ?></legend>
	<?php
		echo $this->Form->input('rule');
	?>
	</fieldset>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
</div>
