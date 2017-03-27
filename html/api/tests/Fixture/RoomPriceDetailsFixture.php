<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RoomPriceDetailsFixture
 *
 */
class RoomPriceDetailsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'price' => ['type' => 'decimal', 'length' => 15, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => '0.00', 'comment' => ''],
        'special_price' => ['type' => 'decimal', 'length' => 15, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => '0.00', 'comment' => ''],
        'rooms_number' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'rooms_avaliable' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'room_size' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'available_date' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'place_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'room_category_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'place_id' => ['type' => 'index', 'columns' => ['place_id'], 'length' => []],
            'room_category_id' => ['type' => 'index', 'columns' => ['room_category_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'room_price_details_ibfk_1' => ['type' => 'foreign', 'columns' => ['place_id'], 'references' => ['places', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'room_price_details_ibfk_2' => ['type' => 'foreign', 'columns' => ['room_category_id'], 'references' => ['room_categories', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'price' => 1.5,
            'special_price' => 1.5,
            'rooms_number' => 1,
            'rooms_avaliable' => 1,
            'room_size' => 'Lorem ipsum dolor sit amet',
            'available_date' => '2017-02-15 00:55:31',
            'created' => '2017-02-15 00:55:31',
            'modified' => '2017-02-15 00:55:31',
            'place_id' => 1,
            'room_category_id' => 1
        ],
    ];
}
