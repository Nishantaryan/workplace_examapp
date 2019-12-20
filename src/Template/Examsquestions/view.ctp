<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ExamsQuestion $examsQuestion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Exams Question'), ['action' => 'edit', $examsQuestion->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Exams Question'), ['action' => 'delete', $examsQuestion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $examsQuestion->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Exams Questions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Exams Question'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Exams'), ['controller' => 'Exams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Exam'), ['controller' => 'Exams', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="examsQuestions view large-9 medium-8 columns content">
    <h3><?= h($examsQuestion->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Exam') ?></th>
            <td><?= $examsQuestion->has('exam') ? $this->Html->link($examsQuestion->exam->name, ['controller' => 'Exams', 'action' => 'view', $examsQuestion->exam->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Question') ?></th>
            <td><?= $examsQuestion->has('question') ? $this->Html->link($examsQuestion->question->id, ['controller' => 'Questions', 'action' => 'view', $examsQuestion->question->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($examsQuestion->id) ?></td>
        </tr>
    </table>
</div>
