<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Room Price Details'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Places'), ['controller' => 'Places', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Place'), ['controller' => 'Places', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Room Categories'), ['controller' => 'RoomCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Room Category'), ['controller' => 'RoomCategories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="roomPriceDetails form large-9 medium-8 columns content">
    <?= $this->Form->create($roomPriceDetail) ?>
    <fieldset>
        <legend><?= __('Add Room Price Detail') ?></legend>
        <?php
            echo $this->Form->input('price');
            echo $this->Form->input('special_price');
            echo $this->Form->input('rooms_number');
            echo $this->Form->input('rooms_avaliable');
            echo $this->Form->input('room_size');
            echo $this->Form->input('available_date', ['empty' => true]);
            echo $this->Form->input('place_id', ['options' => $places]);
            echo $this->Form->input('room_category_id', ['options' => $roomCategories]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
