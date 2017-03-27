<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Transport Entity
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property float $price_day
 * @property string $supplier
 * @property string $brand
 * @property string $type
 * @property int $seats
 * @property int $doors
 * @property \Cake\I18n\Time $available_date
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\TransportFeature[] $transport_features
 */
class Transport extends Entity
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
