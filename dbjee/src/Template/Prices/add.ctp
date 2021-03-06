<?php echo $this->CKEditor->loadJs(); ?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Prices'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="prices form large-9 medium-8 columns content">
    <?= $this->Form->create($price) ?>
    <fieldset>
        <legend><?= __('Add Price') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('value');
            echo $this->Form->input('unit');
            echo $this->Form->input('with_tax');
            echo $this->Form->input('tax_rate');
            echo $this->Form->input('short_description');
            echo $this->Form->input('description');
            echo $this->CKEditor->replace('description');
            echo $this->Form->input('is_featured');
            echo $this->Form->input('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->input('weight');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
