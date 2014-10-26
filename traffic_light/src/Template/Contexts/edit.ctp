<div class="actions columns large-2 medium-3">
	<h3><?= __('Actions') ?></h3>
	<ul class="side-nav">
		<li><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $context->id], ['confirm' => __('Are you sure you want to delete # {0}?', $context->id)]) ?></li>
		<li><?= $this->Html->link(__('List Contexts'), ['action' => 'index']) ?></li>
	</ul>
</div>
<div class="contexts form large-10 medium-9 columns">
<?= $this->Form->create($context) ?>
	<fieldset>
		<legend><?= __('Edit Context') ?></legend>
	<?php
		echo $this->Form->input('lights');
		echo $this->Form->input('left_incoming_traffic');
		echo $this->Form->input('right_incoming_traffic');
	?>
	</fieldset>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
</div>
