<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Register $register
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $register->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $register->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Registers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="registers form large-9 medium-8 columns content">
    <?= $this->Form->create($register) ?>
    <fieldset>
        <legend><?= __('Edit Register') ?></legend>
        <?php
            echo $this->Form->control('date_register');
            echo $this->Form->control('state');
            echo $this->Form->control('calification');
            echo $this->Form->control('course_id', ['options' => $courses]);
            echo $this->Form->control('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
