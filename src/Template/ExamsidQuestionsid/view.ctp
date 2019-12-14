<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ExamsidQuestionsid $examsidQuestionsid
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Examsid Questionsid'), ['action' => 'edit', $examsidQuestionsid->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Examsid Questionsid'), ['action' => 'delete', $examsidQuestionsid->id], ['confirm' => __('Are you sure you want to delete # {0}?', $examsidQuestionsid->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Examsid Questionsid'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Examsid Questionsid'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Exams'), ['controller' => 'Exams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Exam'), ['controller' => 'Exams', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="examsidQuestionsid view large-9 medium-8 columns content">
    <h3><?= h($examsidQuestionsid->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Exam') ?></th>
            <td><?= $examsidQuestionsid->has('exam') ? $this->Html->link($examsidQuestionsid->exam->name, ['controller' => 'Exams', 'action' => 'view', $examsidQuestionsid->exam->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Question') ?></th>
            <td><?= $examsidQuestionsid->has('question') ? $this->Html->link($examsidQuestionsid->question->id, ['controller' => 'Questions', 'action' => 'view', $examsidQuestionsid->question->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($examsidQuestionsid->id) ?></td>
        </tr>
    </table>
</div>
