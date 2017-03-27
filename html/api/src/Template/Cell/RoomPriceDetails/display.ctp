<?php
    $id = 0;
    $roomSizes = ['simple', 'double', 'triple'];
    $roomFields = [
        'rooms_number' => [
            'label' => 'Quantity',
            'type' => 'number',
            'icon' => 'fa-calculator',
            'default' => 1
        ],
        'rooms_avaliable' => [
            'label' => 'Avaliable',
            'type' => 'number',
            'icon' => 'fa-calculator',
            'default' => 1
        ],
        'available_date' => [
            'label' => 'Avaliable date',
            'type' => 'text',
            'icon' => 'fa-calendar',
            'date' => true,
            'default' => ''
        ]
    ];
?>
<div class="row">
    <div class="col-sm-2 col-sm-offset-2 table-responsive">
        <table cellpadding="0" cellspacing="0" class="table">
            <thead>
            <tr>
                <th class="col-md-2"><?= __('Category')?></th>
                <th class="col-md-3 text-center" scope="col"><?= __('Simple')?></th>
                <th class="col-md-3 text-center" scope="col"><?= __('Double')?></th>
                <th class="col-md-3 text-center" scope="col"><?= __('Triple')?></th>
                <th class="col-md-1 text-center" scope="col"></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($roomCategories as $i => $roomCategory){ ?>
                <tr>
                    <td><?= h($roomCategory->title) ?></td>
                    <?php foreach ($roomSizes as $j => $size){ ?>
                        <td>
                            <div class="input-group input-group-sm">
                                <span class="input-group-addon"><i class="fa fa-usd fa-fw"></i></span>
                                <input type="text" class="form-control" name="room_price_details[<?=$id + $j?>][price]">
                                <input type="hidden" name="room_price_details[<?=$id + $j?>][room_category_id]" value="<?=$roomCategory->id?>">
                                <input type="hidden" name="room_price_details[<?=$id + $j?>][room_size]" value="<?=$size?>">
                            </div>
                        </td>
                    <?php } ?>
                    <td>
                        <a href="#" data-expanded="0" data-expand="<?= 'room-cat-' . $i ?>" class="btn btn-sm btn-link room-cat-expand active"><i class="fa fa-expand fa-fw"></i></a>
                    </td>
                </tr>
                <?php foreach ($roomFields as $key => $field){ ?>
                    <tr class="<?= 'room-cat-' . $i ?>" style="display: none;">
                        <td class="text-right">
                            <small><?= $field['label'] ?></small>
                        </td>
                    <?php foreach ($roomSizes as $j => $size){ ?>
                        <td>
                            <div class="input-group input-group-sm <?= isset($field['date']) && $field['date']? 'date datetimepicker-field':'' ?>">
                                <span class="input-group-addon"><i class="fa <?= $field['icon']?:'' ?> fa-fw"></i></span>
                                <input type="<?= $field['type'] ?>" value="<?= $field['default'] ?>" class="form-control" name="room_price_details[<?=$id + $j?>][<?=$key?>]">
                            </div>
                        </td>
                    <?php } ?>
                        <td></td>
                    </tr>
                <?php } ?>
            <?php
                $id+=count($roomSizes);
            } ?>
            </tbody>
        </table>
    </div>
</div>