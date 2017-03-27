<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Image Entity
 *
 * @property int $id
 * @property string $url
 * @property $file_path
 * @property string|resource $binary
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\PlaceImage[] $place_images
 */
class Image extends Entity
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
