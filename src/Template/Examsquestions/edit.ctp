<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ExamsQuestion $examsQuestion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $examsQuestion->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $examsQuestion->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Exams Questions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Exams'), ['controller' => 'Exams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Exam'), ['controller' => 'Exams', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="examsQuestions form large-9 medium-8 columns content">
    <?= $this->Form->create($examsQuestion) ?>
    <fieldset>
        <legend><?= __('Edit Exams Question') ?></legend>
        <?php
            echo $this->Form->control('exam_id', ['options' => $exams]);
            echo $this->Form->control('question_id', ['options' => $questions]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
