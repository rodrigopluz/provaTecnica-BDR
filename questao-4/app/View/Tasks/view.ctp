<div class="tasks view">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1><?php echo __('Tarefa'); ?></h1>
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
                            <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edita Tarefa'), array('action' => 'edit', $task['Task']['id']), array('escape' => false)); ?> </li>
                            <li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Deleta Tarefa'), array('action' => 'delete', $task['Task']['id']), array('escape' => false), __('Tem certeza de que deseja excluir # %s?', $task['Task']['id'])); ?> </li>
                            <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Lista Tarefas'), array('action' => 'index'), array('escape' => false)); ?> </li>
                            <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Nova Tarefa'), array('action' => 'add'), array('escape' => false)); ?> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">			
            <table cellpadding="0" cellspacing="0" class="table table-striped">
                <tbody>
                    <tr>
                        <th><?php echo __('Id'); ?></th>
                        <td>
			                <?php echo h($task['Task']['id']); ?>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo __('Nome'); ?></th>
                        <td>
			                <?php echo h($task['Task']['name']); ?>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo __('Descrição'); ?></th>
                        <td>
			                <?php echo h($task['Task']['description']); ?>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo __('Prioridade'); ?></th>
                        <td>
			                <?php echo h($task['Task']['priority']); ?>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo __('Criado'); ?></th>
                        <td>
			                <?php echo h($task['Task']['created']); ?>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo __('Modificado'); ?></th>
                        <td>
			                <?php echo h($task['Task']['modified']); ?>
                            &nbsp;
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

