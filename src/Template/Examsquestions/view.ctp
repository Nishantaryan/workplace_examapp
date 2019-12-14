<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Examsquestion $examsquestion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Examsquestion'), ['action' => 'edit', $examsquestion->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Examsquestion'), ['action' => 'delete', $examsquestion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $examsquestion->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Examsquestions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Examsquestion'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Exams'), ['controller' => 'Exams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Exam'), ['controller' => 'Exams', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="examsquestions view large-9 medium-8 columns content">
    <h3><?= h($examsquestion->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Exam') ?></th>
            <td><?= $examsquestion->has('exam') ? $this->Html->link($examsquestion->exam->name, ['controller' => 'Exams', 'action' => 'view', $examsquestion->exam->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Question') ?></th>
            <td><?= $examsquestion->has('question') ? $this->Html->link($examsquestion->question->id, ['controller' => 'Questions', 'action' => 'view', $examsquestion->question->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($examsquestion->id) ?></td>
        </tr>
    </table>
</div>
