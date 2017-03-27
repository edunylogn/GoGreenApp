<?php

$cellImageSelector = $this->cell('ImageSelector');
$cellRoomPriceDetails = $this->cell('RoomPriceDetails');

?>

<div class="places form content" id="main-container">
    <div class="row">
        <div class="col-xs-12">
            <h1 class="page-header"><?= __('Add Hotel') ?></h1>
            <ul class="nav nav-tabs">
                <li class="active"><a href="#1add"  data-toggle="tab">Basic Information</a></li>
                <li><a href="#2add" data-toggle="tab">Address</a></li>
                <li><a href="#3add" data-toggle="tab">Prices</a></li>
                <li><a href="#4add" data-toggle="tab">Images</a></li>
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
                            ?>
                        </div>
                        <div class="col-md-6">
                            <?php
                            echo $this->Form->input('phone');
                            echo $this->Form->input('email');
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
                        <div class="col-md-6">
                            <?php
                            echo $this->Form->input('line_1');
                            echo $this->Form->input('line_2');
                            echo $this->Form->input('city');
                            echo $this->Form->input('state');
                            echo $this->Form->input('zip');
                            ?>
                        </div>
                        <div class="col-md-6">
                            <?php
                            echo $this->Form->input('nearest_street');
                            echo $this->Form->input('region_id', ['options' => $regions, 'empty' => '(choose one)']);
                            echo $this->Form->input('latitude');
                            echo $this->Form->input('longitude');
                            ?>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="3add">
                    <div class="row">
                        <div class="col-xs-12">
                            <?= $cellRoomPriceDetails ?>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="4add">
                    <div class="row">
                        <div class="col-xs-12">
                            <?= $cellImageSelector ?>
                        </div>
                    </div>
                </div>
            </div>
            <?= $this->Form->button(__('Submit'), ['class'=> 'btn-success']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
<?= $this->Html->script('pages/placeHelper.js', ['block' => 'scriptBottom']);?>