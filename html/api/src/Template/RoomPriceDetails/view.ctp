<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Room Price Detail'), ['action' => 'edit', $roomPriceDetail->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Room Price Detail'), ['action' => 'delete', $roomPriceDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $roomPriceDetail->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Room Price Details'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Room Price Detail'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Places'), ['controller' => 'Places', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Place'), ['controller' => 'Places', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Room Categories'), ['controller' => 'RoomCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Room Category'), ['controller' => 'RoomCategories', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="roomPriceDetails view large-9 medium-8 columns content">
    <h3><?= h($roomPriceDetail->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Room Size') ?></th>
            <td><?= h($roomPriceDetail->room_size) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Place') ?></th>
            <td><?= $roomPriceDetail->has('place') ? $this->Html->link($roomPriceDetail->place->name, ['controller' => 'Places', 'action' => 'view', $roomPriceDetail->place->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Room Category') ?></th>
            <td><?= $roomPriceDetail->has('room_category') ? $this->Html->link($roomPriceDetail->room_category->title, ['controller' => 'RoomCategories', 'action' => 'view', $roomPriceDetail->room_category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($roomPriceDetail->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($roomPriceDetail->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Special Price') ?></th>
            <td><?= $this->Number->format($roomPriceDetail->special_price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rooms Number') ?></th>
            <td><?= $this->Number->format($roomPriceDetail->rooms_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rooms Avaliable') ?></th>
            <td><?= $this->Number->format($roomPriceDetail->rooms_avaliable) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Available Date') ?></th>
            <td><?= h($roomPriceDetail->available_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($roomPriceDetail->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($roomPriceDetail->modified) ?></td>
        </tr>
    </table>
</div>
