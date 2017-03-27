<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Region'), ['action' => 'edit', $region->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Region'), ['action' => 'delete', $region->id], ['confirm' => __('Are you sure you want to delete # {0}?', $region->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Regions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Region'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Parent Regions'), ['controller' => 'Regions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Parent Region'), ['controller' => 'Regions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Places'), ['controller' => 'Places', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Place'), ['controller' => 'Places', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="regions view large-9 medium-8 columns content">
    <h3><?= h($region->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($region->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Parent Region') ?></th>
            <td><?= $region->has('parent_region') ? $this->Html->link($region->parent_region->name, ['controller' => 'Regions', 'action' => 'view', $region->parent_region->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($region->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Left') ?></th>
            <td><?= $this->Number->format($region->left) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Right') ?></th>
            <td><?= $this->Number->format($region->right) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($region->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($region->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Places') ?></h4>
        <?php if (!empty($region->places)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Nearest Street') ?></th>
                <th scope="col"><?= __('Line 1') ?></th>
                <th scope="col"><?= __('Line 2') ?></th>
                <th scope="col"><?= __('City') ?></th>
                <th scope="col"><?= __('State') ?></th>
                <th scope="col"><?= __('Zip') ?></th>
                <th scope="col"><?= __('Region Id') ?></th>
                <th scope="col"><?= __('Latitude') ?></th>
                <th scope="col"><?= __('Longitude') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Phone') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($region->places as $places): ?>
            <tr>
                <td><?= h($places->id) ?></td>
                <td><?= h($places->name) ?></td>
                <td><?= h($places->description) ?></td>
                <td><?= h($places->nearest_street) ?></td>
                <td><?= h($places->line_1) ?></td>
                <td><?= h($places->line_2) ?></td>
                <td><?= h($places->city) ?></td>
                <td><?= h($places->state) ?></td>
                <td><?= h($places->zip) ?></td>
                <td><?= h($places->region_id) ?></td>
                <td><?= h($places->latitude) ?></td>
                <td><?= h($places->longitude) ?></td>
                <td><?= h($places->created) ?></td>
                <td><?= h($places->modified) ?></td>
                <td><?= h($places->phone) ?></td>
                <td><?= h($places->email) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Places', 'action' => 'view', $places->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Places', 'action' => 'edit', $places->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Places', 'action' => 'delete', $places->id], ['confirm' => __('Are you sure you want to delete # {0}?', $places->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Regions') ?></h4>
        <?php if (!empty($region->child_regions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Parent Id') ?></th>
                <th scope="col"><?= __('Left') ?></th>
                <th scope="col"><?= __('Right') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($region->child_regions as $childRegions): ?>
            <tr>
                <td><?= h($childRegions->id) ?></td>
                <td><?= h($childRegions->name) ?></td>
                <td><?= h($childRegions->parent_id) ?></td>
                <td><?= h($childRegions->left) ?></td>
                <td><?= h($childRegions->right) ?></td>
                <td><?= h($childRegions->created) ?></td>
                <td><?= h($childRegions->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Regions', 'action' => 'view', $childRegions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Regions', 'action' => 'edit', $childRegions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Regions', 'action' => 'delete', $childRegions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childRegions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
