<div class="tasks form">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1><?php echo __('Edita Tarefa'); ?></h1>
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
                            <li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Deleta'), array('action' => 'delete', $this->Form->value('Task.id')), array('escape' => false), __('Tem certeza de que deseja excluir # %s?', $this->Form->value('Task.id'))); ?></li>
                            <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Lista Tarefa'), array('action' => 'index'), array('escape' => false)); ?></li>
                        </ul>
                    </div>
                </div>
            </div>			
        </div><!-- end col md 3 -->
        <div class="col-md-9">
			<?php echo $this->Form->create('Task', array('role' => 'form')); ?>
            <div class="form-group">
				<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
            </div>
            <div class="form-group">
				<?php echo $this->Form->input('name', array('class' => 'form-control', 'placeholder' => 'Nome'));?>
            </div>
            <div class="form-group">
				<?php echo $this->Form->input('description', array('class' => 'form-control', 'placeholder' => 'Descrição'));?>
            </div>
            <div class="form-group">
				<?php echo $this->Form->input('priority', array('class' => 'form-control', 'placeholder' => 'Prioridade'));?>
            </div>
            <div class="form-group">
				<?php echo $this->Form->submit(__('Salvar'), array('class' => 'btn btn-default')); ?>
            </div>
			<?php echo $this->Form->end() ?>
        </div>
    </div>
</div>
