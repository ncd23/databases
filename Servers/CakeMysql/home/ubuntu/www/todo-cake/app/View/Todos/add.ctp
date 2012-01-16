<div class="todos form">
<?php echo $this->Form->create('Todo');?>
	<fieldset>
		<legend><?php echo __('Add Todo'); ?></legend>
	<?php
		echo $this->Form->input('todo');
		echo $this->Form->input('done');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Todos'), array('action' => 'index'));?></li>
	</ul>
</div>
