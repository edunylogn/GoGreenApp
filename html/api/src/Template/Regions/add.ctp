<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Regions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Parent Regions'), ['controller' => 'Regions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Parent Region'), ['controller' => 'Regions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Places'), ['controller' => 'Places', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Place'), ['controller' => 'Places', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="regions form large-9 medium-8 columns content">
    <?= $this->Form->create($region) ?>
    <fieldset>
        <legend><?= __('Add Region') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('parent_id', ['options' => $parentRegions, 'empty' => true]);
            echo $this->Form->input('left');
            echo $this->Form->input('right');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
