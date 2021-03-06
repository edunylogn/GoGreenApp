<?php

$cellImageSelector = $this->cell('ImageSelector::displayForEdit', [$place->id]);
$cellRoomPriceDetails = $this->cell('RoomPriceDetails::view', [$place->id, true]);


?>

<div class="places form content" id="main-container">
    <div class="row">
        <div class="col-xs-12">
            <h1 class="page-header"><?= __('Edit Hotel') ?></h1>
            <ul class="nav nav-tabs">
                <li class="active"><a href="#1add"  data-toggle="tab">Basic Information</a></li>
                <li><a href="#2add" data-toggle="tab">Prices</a></li>
                <li><a href="#3add" data-toggle="tab">Images</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 form-container">
            <?= $this->Form->create($place, ['novalidate'=>'novalidate']) ?>
            <div class="tab-content clearfix">
                <div class="tab-pane active" id="1add">
                    <div class="row">
                        <div class="col-md-6">
                            <?php
                            echo $this->Form->input('name');
                            echo $this->Form->input('description');
                            echo $this->Form->input('rating', ['options' => [1,2,3,4,5], 'type' => 'radio']);
                            ?>
                        </div>
                        <div class="col-md-6">
                            <?php
                            echo $this->Form->input('region_id', ['options' => $regions, 'empty' => '(choose one)']);
                            echo $this->Form->input('latitude');
                            echo $this->Form->input('longitude');
                            echo $this->Form->input('maps_url');
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <hr>
                        <div class="col-md-6 checkbox-group">
                            <?php
                            echo $this->Form->input('features._ids', ['label' => ['class' => 'custom-checkboxes'], 'multiple' => 'checkbox', 'options' => $features]);
                            ?>
                        </div>
                        <div class="col-md-6 checkbox-group">
                            <?php
                            echo $this->Form->input('tags._ids', ['label' => ['class' => 'custom-checkboxes'], 'multiple' => 'checkbox', 'options' => $tags]);
                            ?>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="2add">
                    <div class="row">
                        <div class="col-xs-12">
                            <?= $cellRoomPriceDetails ?>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="3add">
                    <div class="row">
                        <div class="col-xs-12">
                            <?= $cellImageSelector ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-group">
                <?= $this->Form->button(__('Submit'), ['class'=> 'btn-success']) ?>
                <?= $this->Form->postLink(
                    __('Delete'),
                    ['action' => 'delete', $place->id],
                    ['class'=> 'btn btn-danger', 'confirm' => __('Are you sure you want to delete # {0}?', $place->id)]
                )
                ?>
            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
<?= $this->Html->script('pages/placeHelper.js', ['block' => 'scriptBottom']);?>