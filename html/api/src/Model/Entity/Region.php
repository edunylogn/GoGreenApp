<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Region Entity
 *
 * @property int $id
 * @property string $name
 * @property int $parent_id
 * @property int $left
 * @property int $right
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\ParentRegion $parent_region
 * @property \App\Model\Entity\Place[] $places
 * @property \App\Model\Entity\ChildRegion[] $child_regions
 */
class Region extends Entity
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
