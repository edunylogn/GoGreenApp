<?php

$cellRoomPriceDetails = $this->cell('RoomPriceDetails::view', [$place->id, false]);

?>
<div class="places-view form content" id="main-container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

            <h3><?= h($place->name) ?></h3>
            <div class="panel panel-success">
                <div class="panel-heading">
                    General Info
                </div>
                <div class="panel-body">
                    <table class="table vertical-table">
                        <tr>
                            <th scope="row"><?= __('Name') ?></th>
                            <td><?= h($place->name) ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><?= __('Nearest Street') ?></th>
                            <td><?= h($place->nearest_street) ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><?= __('Line 1') ?></th>
                            <td><?= h($place->line_1) ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><?= __('Line 2') ?></th>
                            <td><?= h($place->line_2) ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><?= __('City') ?></th>
                            <td><?= h($place->city) ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><?= __('State') ?></th>
                            <td><?= h($place->state) ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><?= __('Zip') ?></th>
                            <td><?= h($place->zip) ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><?= __('Region') ?></th>
                            <td><?= $place->has('region') ? $this->Html->link($place->region->name, ['controller' => 'Regions', 'action' => 'view', $place->region->id]) : '' ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><?= __('Latitude') ?></th>
                            <td><?= h($place->latitude) ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><?= __('Longitude') ?></th>
                            <td><?= h($place->longitude) ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><?= __('Phone') ?></th>
                            <td><?= h($place->phone) ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><?= __('Email') ?></th>
                            <td><?= h($place->email) ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><?= __('Id') ?></th>
                            <td><?= $this->Number->format($place->id) ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><?= __('Created') ?></th>
                            <td><?= h($place->created) ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><?= __('Modified') ?></th>
                            <td><?= h($place->modified) ?></td>
                        </tr>
                    </table>
                    <div class="col-sm-12">
                        <h4><?= __('Description') ?></h4>
                        <?= $this->Text->autoParagraph(h($place->description)); ?>
                    </div>
                </div>
            </div>
            <div class="panel panel-success">
                <div class="panel-heading">
                    <?= __('Price Details') ?>
                </div>
                <div class="panel-body">
                    <?= $cellRoomPriceDetails ?>
                </div>
            </div>
            <div class="panel panel-success">
                <div class="panel-heading">
                    <?= __('Related Tags') ?>
                </div>
                <div class="panel-body">
                    <div class="col-xs-8 col-xs-offset-2">
                        <?php if (!empty($place->tags)): ?>
                        <table cellpadding="0" cellspacing="0" class="table">
                            <tr>
                                <th class="col-xs-2" scope="col"><?= __('Id') ?></th>
                                <th class="col-xs-6" scope="col"><?= __('Title') ?></th>
                                <th class="col-xs-4" scope="col" class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($place->tags as $tags): ?>
                            <tr>
                                <td><?= h($tags->id) ?></td>
                                <td><?= h($tags->title) ?></td>
                                <td class="actions text-right">
                                    <div class="btn-group">
                                        <?= $this->Html->link(__('View'), ['controller' => 'Tags', 'action' => 'view', $tags->id], ['class'=> 'btn btn-sm btn-info']) ?>
                                        <?= $this->Html->link(__('Edit'), ['controller' => 'Tags', 'action' => 'edit', $tags->id], ['class'=> 'btn btn-sm btn-default']) ?>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="panel panel-success">
                <div class="panel-heading">
                    <?= __('Related Features') ?>
                </div>
                <div class="panel-body">
                    <div class="col-xs-8 col-xs-offset-2">
                        <?php if (!empty($place->features)): ?>
                        <table cellpadding="0" cellspacing="0" class="table">
                            <tr>
                                <th class="col-xs-2" scope="col"><?= __('Id') ?></th>
                                <th class="col-xs-3" scope="col"><?= __('Name') ?></th>
                                <th class="col-xs-3" scope="col"><?= __('Feature Category') ?></th>
                                <th class="col-xs-4" scope="col" class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($place->features as $features): ?>
                            <tr>
                                <td><?= h($features->id) ?></td>
                                <td><?= h($features->name) ?></td>
                                <td><?= h($features->feature_category) ?></td>
                                <td class="actions text-right">
                                    <div class="btn-group">
                                        <?= $this->Html->link(__('View'), ['controller' => 'Features', 'action' => 'view', $features->id], ['class'=> 'btn btn-sm btn-info']) ?>
                                        <?= $this->Html->link(__('Edit'), ['controller' => 'Features', 'action' => 'edit', $features->id], ['class'=> 'btn btn-sm btn-default']) ?>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="panel panel-success">
                <div class="panel-heading">
                    <?= __('Related Images') ?>
                </div>
                <div class="panel-body">
                    <?php if (!empty($place->images)): ?>
                        <div class=" images-view-container">
                            <?php foreach ($place->images as $image): ?>
                                <div class="col-sm-6 col-md-4">
                                    <div class="panel panel-success">
                                        <div class="panel-body">
                                            <div class="text-center">
                                                <div class="img-item-content">
                                                    <img src="<?= h(SUBFOLDER . DS . $image->file_path . 'thumb-' . $image->image) ?>" alt="...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->Html->script('pages/placeHelper.js', ['block' => 'scriptBottom']);?>