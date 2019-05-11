<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tarefa[]|\Cake\Collection\CollectionInterface $tarefas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ação') ?></li>
        <li><?= $this->Html->link(__('Nova tarefa'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tarefas index large-9 medium-8 columns content">
    <h3><?= __('API') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Descrição') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Prioridade') ?></th>
                <th scope="col" class="actions"><?= __('Ação') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($recipes as $tarefa): ?>
            <tr>
                <td><?= h($tarefa->titulo) ?></td>
                <td><?= h($tarefa->descricao) ?></td>
                <td><?= $this->Number->format($tarefa->prioridade) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $tarefa->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $tarefa->id]) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $tarefa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tarefa->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Próximo') . ' >') ?>
            <?= $this->Paginator->last(__('Último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, exibindo {{current}} registros(s) de {{count}}')]) ?></p>
    </div>
</div>
