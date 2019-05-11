<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tarefa $tarefa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Editar'), ['action' => 'edit', $tarefa->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $tarefa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tarefa->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tarefas view large-9 medium-8 columns content">
    <h3><?= h($tarefa->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($tarefa->titulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prioridade') ?></th>
            <td><?= $this->Number->format($tarefa->prioridade) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descricao') ?></h4>
        <?= $this->Text->autoParagraph(h($tarefa->descricao)); ?>
    </div>
</div>
