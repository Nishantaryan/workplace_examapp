<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ExamsidQuestionsid[]|\Cake\Collection\CollectionInterface $examsidQuestionsid
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Examsid Questionsid'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Exams'), ['controller' => 'Exams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Exam'), ['controller' => 'Exams', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="examsidQuestionsid index large-9 medium-8 columns content">
    <h3><?= __('Examsid Questionsid') ?></h3>
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
            <?php foreach ($examsidQuestionsid as $examsidQuestionsid): ?>
            <tr>
                <td><?= $this->Number->format($examsidQuestionsid->id) ?></td>
                <td><?= $examsidQuestionsid->has('exam') ? $this->Html->link($examsidQuestionsid->exam->name, ['controller' => 'Exams', 'action' => 'view', $examsidQuestionsid->exam->id]) : '' ?></td>
                <td><?= $examsidQuestionsid->has('question') ? $this->Html->link($examsidQuestionsid->question->id, ['controller' => 'Questions', 'action' => 'view', $examsidQuestionsid->question->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $examsidQuestionsid->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $examsidQuestionsid->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $examsidQuestionsid->id], ['confirm' => __('Are you sure you want to delete # {0}?', $examsidQuestionsid->id)]) ?>
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
