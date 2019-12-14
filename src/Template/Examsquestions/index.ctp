<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Examsquestion[]|\Cake\Collection\CollectionInterface $examsquestions
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Examsquestion'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Exams'), ['controller' => 'Exams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Exam'), ['controller' => 'Exams', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="examsquestions index large-9 medium-8 columns content">
    <h3><?= __('Examsquestions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('exams_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('questions_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($examsquestions as $examsquestion): ?>
            <tr>
                <td><?= $this->Number->format($examsquestion->id) ?></td>
                <td><?= $examsquestion->has('exam') ? $this->Html->link($examsquestion->exam->name, ['controller' => 'Exams', 'action' => 'view', $examsquestion->exam->id]) : '' ?></td>
                <td><?= $examsquestion->has('question') ? $this->Html->link($examsquestion->question->id, ['controller' => 'Questions', 'action' => 'view', $examsquestion->question->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $examsquestion->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $examsquestion->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $examsquestion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $examsquestion->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
