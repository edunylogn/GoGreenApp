<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Image'), ['action' => 'edit', $image->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Image'), ['action' => 'delete', $image->id], ['confirm' => __('Are you sure you want to delete # {0}?', $image->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Images'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Image'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Place Images'), ['controller' => 'PlaceImages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Place Image'), ['controller' => 'PlaceImages', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="images view large-9 medium-8 columns content">
    <h3><?= h($image->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('File Path') ?></th>
            <td><?= h($image->file_path) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($image->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($image->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($image->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Url') ?></h4>
        <?= $this->Text->autoParagraph(h($image->url)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Place Images') ?></h4>
        <?php if (!empty($image->place_images)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Legend') ?></th>
                <th scope="col"><?= __('Place Id') ?></th>
                <th scope="col"><?= __('Image Id') ?></th>
                <th scope="col"><?= __('Active') ?></th>
                <th scope="col"><?= __('Position') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($image->place_images as $placeImages): ?>
            <tr>
                <td><?= h($placeImages->id) ?></td>
                <td><?= h($placeImages->legend) ?></td>
                <td><?= h($placeImages->place_id) ?></td>
                <td><?= h($placeImages->image_id) ?></td>
                <td><?= h($placeImages->active) ?></td>
                <td><?= h($placeImages->position) ?></td>
                <td><?= h($placeImages->created) ?></td>
                <td><?= h($placeImages->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'PlaceImages', 'action' => 'view', $placeImages->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'PlaceImages', 'action' => 'edit', $placeImages->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PlaceImages', 'action' => 'delete', $placeImages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $placeImages->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
