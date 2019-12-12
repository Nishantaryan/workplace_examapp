<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Exam $exam
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Exam'), ['action' => 'edit', $exam->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Exam'), ['action' => 'delete', $exam->id], ['confirm' => __('Are you sure you want to delete # {0}?', $exam->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Exams'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Exam'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Responses'), ['controller' => 'Responses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Response'), ['controller' => 'Responses', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="exams view large-9 medium-8 columns content">
    <h3><?= h($exam->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($exam->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Duration') ?></th>
            <td><?= h($exam->duration) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= h($exam->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total Marks') ?></th>
            <td><?= h($exam->total_marks) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($exam->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($exam->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($exam->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Responses') ?></h4>
        <?php if (!empty($exam->responses)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Exam Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Question Id') ?></th>
                <th scope="col"><?= __('Answer') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Marks') ?></th>
                <th scope="col"><?= __('Total') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($exam->responses as $responses): ?>
            <tr>
                <td><?= h($responses->id) ?></td>
                <td><?= h($responses->exam_id) ?></td>
                <td><?= h($responses->user_id) ?></td>
                <td><?= h($responses->question_id) ?></td>
                <td><?= h($responses->answer) ?></td>
                <td><?= h($responses->description) ?></td>
                <td><?= h($responses->marks) ?></td>
                <td><?= h($responses->total) ?></td>
                <td><?= h($responses->created) ?></td>
                <td><?= h($responses->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Responses', 'action' => 'view', $responses->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Responses', 'action' => 'edit', $responses->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Responses', 'action' => 'delete', $responses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $responses->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
