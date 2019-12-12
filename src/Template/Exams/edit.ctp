<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Exam $exam
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $exam->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $exam->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Exams'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Responses'), ['controller' => 'Responses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Response'), ['controller' => 'Responses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="exams form large-9 medium-8 columns content">
    <?= $this->Form->create($exam) ?>
    <fieldset>
        <legend><?= __('Edit Exam') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('duration');
            echo $this->Form->control('type');
            echo $this->Form->control('total_marks');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
