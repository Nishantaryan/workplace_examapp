<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Question $question
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Question'), ['action' => 'edit', $question->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Question'), ['action' => 'delete', $question->id], ['confirm' => __('Are you sure you want to delete # {0}?', $question->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Questions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Question'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Exams'), ['controller' => 'Exams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Exam'), ['controller' => 'Exams', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Responses'), ['controller' => 'Responses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Response'), ['controller' => 'Responses', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="questions view large-9 medium-8 columns content">
    <h3><?= h($question->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($question->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= h($question->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($question->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Level') ?></th>
            <td><?= $this->Number->format($question->level) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Negative Marks') ?></th>
            <td><?= $this->Number->format($question->negative_marks) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mark Contain') ?></th>
            <td><?= $this->Number->format($question->mark_contain) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Option Count') ?></th>
            <td><?= $this->Number->format($question->option_count) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($question->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($question->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Option A') ?></h4>
        <?= $this->Text->autoParagraph(h($question->option_a)); ?>
    </div>
    <div class="row">
        <h4><?= __('Option B') ?></h4>
        <?= $this->Text->autoParagraph(h($question->option_b)); ?>
    </div>
    <div class="row">
        <h4><?= __('Option C') ?></h4>
        <?= $this->Text->autoParagraph(h($question->option_c)); ?>
    </div>
    <div class="row">
        <h4><?= __('Option D') ?></h4>
        <?= $this->Text->autoParagraph(h($question->option_d)); ?>
    </div>
    <div class="row">
        <h4><?= __('Option E') ?></h4>
        <?= $this->Text->autoParagraph(h($question->option_e)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Responses') ?></h4>
        <?php if (!empty($question->responses)): ?>
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
            <?php foreach ($question->responses as $responses): ?>
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
