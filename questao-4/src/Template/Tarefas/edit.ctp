<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tarefa $tarefa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ação') ?></li>
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $tarefa->id],
                ['confirm' => __('Tem certeza que deseja exlucir o registro # {0}?', $tarefa->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar Tarefas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tarefas form large-9 medium-8 columns content">
    <?= $this->Form->create($tarefa) ?>
    <fieldset>
        <legend><?= __('Editar Tarefa') ?></legend>
        <?php
            echo $this->Form->control('titulo',['label'=>'Nome']);
            echo $this->Form->control('descricao',['type' => 'textarea', 'label'=>'Descrição']);
            echo $this->Form->control('prioridade',['label'=>'Prioridade']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
