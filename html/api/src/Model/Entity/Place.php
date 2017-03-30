<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Place Entity
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $region_id
 * @property string $latitude
 * @property string $longitude
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property bool $completed
 * @property int $rating
 * @property string $maps_url
 *
 * @property \App\Model\Entity\Region $region
 * @property \App\Model\Entity\PlaceFeature[] $place_features
 * @property \App\Model\Entity\PlaceImage[] $place_images
 * @property \App\Model\Entity\PlaceTag[] $place_tags
 * @property \App\Model\Entity\RoomPriceDetail[] $room_price_details
 */
class Place extends Entity
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
