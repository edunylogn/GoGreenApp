<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tour Entity
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property float $price
 * @property string $company
 * @property string $duration
 * @property string $destination
 * @property string $address
 * @property string $latitude
 * @property string $longitude
 * @property \Cake\I18n\Time $available_date
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\TourFeature[] $tour_features
 */
class Tour extends Entity
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
