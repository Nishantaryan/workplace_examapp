<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ExamsidQuestionsid $examsidQuestionsid
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $examsidQuestionsid->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $examsidQuestionsid->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Examsid Questionsid'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Exams'), ['controller' => 'Exams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Exam'), ['controller' => 'Exams', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="examsidQuestionsid form large-9 medium-8 columns content">
    <?= $this->Form->create($examsidQuestionsid) ?>
    <fieldset>
        <legend><?= __('Edit Examsid Questionsid') ?></legend>
        <?php
            echo $this->Form->control('exams_id', ['options' => $exams]);
            echo $this->Form->control('questions_id', ['options' => $questions]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
