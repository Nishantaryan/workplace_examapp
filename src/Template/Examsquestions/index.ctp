<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ExamsQuestion[]|\Cake\Collection\CollectionInterface $examsQuestions
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Exams Question'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Exams'), ['controller' => 'Exams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Exam'), ['controller' => 'Exams', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="examsQuestions index large-9 medium-8 columns content">
    <h3><?= __('Exams Questions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('exam_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('question_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($examsQuestions as $examsQuestion): ?>
            <tr>
                <td><?= $this->Number->format($examsQuestion->id) ?></td>
                <td><?= $examsQuestion->has('exam') ? $this->Html->link($examsQuestion->exam->name, ['controller' => 'Exams', 'action' => 'view', $examsQuestion->exam->id]) : '' ?></td>
                <td><?= $examsQuestion->has('question') ? $this->Html->link($examsQuestion->question->id, ['controller' => 'Questions', 'action' => 'view', $examsQuestion->question->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $examsQuestion->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $examsQuestion->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $examsQuestion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $examsQuestion->id)]) ?>
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
