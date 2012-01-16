<div>Demo demo demo</div>
<div class="todos index">
	<h2><?php echo __('Todos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('todo');?></th>
			<th><?php echo $this->Paginator->sort('done');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($todos as $todo): ?>
	<tr>
		<td><?php echo h($todo['Todo']['id']); ?>&nbsp;</td>
		<td><?php echo h($todo['Todo']['todo']); ?>&nbsp;</td>
		<td><?php echo h($todo['Todo']['done']); ?>&nbsp;</td>
		<td><?php echo h($todo['Todo']['created']); ?>&nbsp;</td>
		<td><?php echo h($todo['Todo']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $todo['Todo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $todo['Todo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $todo['Todo']['id']), null, __('Are you sure you want to delete # %s?', $todo['Todo']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Todo'), array('action' => 'add')); ?></li>
	</ul>
</div>
