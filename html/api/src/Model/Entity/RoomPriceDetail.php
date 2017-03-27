<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RoomPriceDetail Entity
 *
 * @property int $id
 * @property float $price
 * @property float $special_price
 * @property int $rooms_number
 * @property int $rooms_avaliable
 * @property string $room_size
 * @property \Cake\I18n\Time $available_date
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property int $place_id
 * @property int $room_category_id
 *
 * @property \App\Model\Entity\Place $place
 * @property \App\Model\Entity\RoomCategory $room_category
 */
class RoomPriceDetail extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
