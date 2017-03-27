<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Room Price Detail'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Places'), ['controller' => 'Places', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Place'), ['controller' => 'Places', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Room Categories'), ['controller' => 'RoomCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Room Category'), ['controller' => 'RoomCategories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="roomPriceDetails index large-9 medium-8 columns content">
    <h3><?= __('Room Price Details') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('special_price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rooms_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rooms_avaliable') ?></th>
                <th scope="col"><?= $this->Paginator->sort('room_size') ?></th>
                <th scope="col"><?= $this->Paginator->sort('available_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('place_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('room_category_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($roomPriceDetails as $roomPriceDetail): ?>
            <tr>
                <td><?= $this->Number->format($roomPriceDetail->id) ?></td>
                <td><?= $this->Number->format($roomPriceDetail->price) ?></td>
                <td><?= $this->Number->format($roomPriceDetail->special_price) ?></td>
                <td><?= $this->Number->format($roomPriceDetail->rooms_number) ?></td>
                <td><?= $this->Number->format($roomPriceDetail->rooms_avaliable) ?></td>
                <td><?= h($roomPriceDetail->room_size) ?></td>
                <td><?= h($roomPriceDetail->available_date) ?></td>
                <td><?= h($roomPriceDetail->created) ?></td>
                <td><?= h($roomPriceDetail->modified) ?></td>
                <td><?= $roomPriceDetail->has('place') ? $this->Html->link($roomPriceDetail->place->name, ['controller' => 'Places', 'action' => 'view', $roomPriceDetail->place->id]) : '' ?></td>
                <td><?= $roomPriceDetail->has('room_category') ? $this->Html->link($roomPriceDetail->room_category->title, ['controller' => 'RoomCategories', 'action' => 'view', $roomPriceDetail->room_category->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $roomPriceDetail->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $roomPriceDetail->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $roomPriceDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $roomPriceDetail->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
