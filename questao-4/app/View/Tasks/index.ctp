<div class="tasks index">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1><?php echo __('Tarefas'); ?></h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="actions">
                <div class="panel panel-default">
                    <div class="panel-heading">Ações</div>
                    <div class="panel-body">
                        <ul class="nav nav-pills nav-stacked">
                            <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Nova Tarefa'), array('action' => 'add'), array('escape' => false)); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <table cellpadding="0" cellspacing="0" class="table table-striped">
                <thead>
                    <tr>
                        <th><?php echo $this->Paginator->sort('id'); ?></th>
                        <th><?php echo $this->Paginator->sort('Nome'); ?></th>
                        <th><?php echo $this->Paginator->sort('Descrição'); ?></th>
                        <th><?php echo $this->Paginator->sort('Prioridade'); ?></th>
                        <th><?php echo $this->Paginator->sort('Criado'); ?></th>
                        <th><?php echo $this->Paginator->sort('Modificado'); ?></th>
                        <th class="actions"></th>
                    </tr>
                </thead>
                <tbody>
				<?php foreach ($tasks as $task): ?>
                    <tr>
                        <td><?php echo h($task['Task']['id']); ?>&nbsp;</td>
                        <td><?php echo h($task['Task']['name']); ?>&nbsp;</td>
                        <td><?php echo h($task['Task']['description']); ?>&nbsp;</td>
                        <td><?php echo h($task['Task']['priority']); ?>&nbsp;</td>
                        <td><?php echo h($task['Task']['created']); ?>&nbsp;</td>
                        <td><?php echo h($task['Task']['modified']); ?>&nbsp;</td>
                        <td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $task['Task']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $task['Task']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $task['Task']['id']), array('escape' => false), __('Tem certeza de que deseja excluir # %s?', $task['Task']['id'])); ?>
                        </td>
                    </tr>
				<?php endforeach; ?>
                </tbody>
            </table>
            <p>
                <small><?php echo $this->Paginator->counter(array('format' => __('Página {:page} de {:pages}, mostrando {:current} registro de {:count} total, começando no registro {:start}, terminando em {:end}')));?></small>
            </p>
			<?php
			$params = $this->Paginator->params();
			if ($params['pageCount'] > 1) {
			?>
            <ul class="pagination pagination-sm">
				<?php
				echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev','tag' => 'li','escape' => false), '<a onclick="return false;">&larr; Previous</a>', array('class' => 'prev disabled','tag' => 'li','escape' => false));
				echo $this->Paginator->numbers(array('separator' => '','tag' => 'li','currentClass' => 'active','currentTag' => 'a'));
				echo $this->Paginator->next('Next &rarr;', array('class' => 'next','tag' => 'li','escape' => false), '<a onclick="return false;">Next &rarr;</a>', array('class' => 'next disabled','tag' => 'li','escape' => false));
				?>
            </ul>
			<?php } ?>
        </div>
    </div>
</div>