<?php
    $id = 0;
    $roomSizes = ['simple', 'double', 'triple'];
    $roomFields = [
        'rooms_number' => [
            'label' => 'Quantity'
        ],
        'rooms_avaliable' => [
            'label' => 'Avaliable'
        ],
        'available_date' => [
            'label' => 'Avaliable date'
        ]
    ];
?>
<div class="row">
    <div class="col-sm-12">
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
                        <td class="text-center">
                            <?= isset($roomPriceDetails[$id + $j]['price'])?'$'.$roomPriceDetails[$id + $j]['price']: ''; ?>
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
                        <td class="text-center">
                            <?= $roomPriceDetails[$id + $j][$key]?>
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