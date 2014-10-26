<div class="actions columns large-2 medium-3">
	<h3><?= __('Actions') ?></h3>
	<ul class="side-nav">
		<li><?= $this->Html->link(__('List Rules Apply On Contexts'), ['action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('List Rules'), ['controller' => 'Rules', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Rule'), ['controller' => 'Rules', 'action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('List Contexts'), ['controller' => 'Contexts', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Context'), ['controller' => 'Contexts', 'action' => 'add']) ?> </li>
	</ul>
</div>
<div class="rulesApplyOnContexts form large-10 medium-9 columns">
<?= $this->Form->create($rulesApplyOnContext) ?>
	<fieldset>
		<legend><?= __('Add Rules Apply On Context') ?></legend>
	<?php
		echo $this->Form->input('rule_id', ['options' => $rules]);
		echo $this->Form->input('context_id', ['options' => $contexts]);
		echo $this->Form->input('pass');
	?>
	</fieldset>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
</div>
