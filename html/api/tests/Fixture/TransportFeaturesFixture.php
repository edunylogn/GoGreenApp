<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TransportFeaturesFixture
 *
 */
class TransportFeaturesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'status' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => '1', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'transport_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'feature_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'transport_id' => ['type' => 'index', 'columns' => ['transport_id'], 'length' => []],
            'feature_id' => ['type' => 'index', 'columns' => ['feature_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'transport_features_ibfk_1' => ['type' => 'foreign', 'columns' => ['transport_id'], 'references' => ['transports', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'transport_features_ibfk_2' => ['type' => 'foreign', 'columns' => ['feature_id'], 'references' => ['features', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'status' => 1,
            'transport_id' => 1,
            'feature_id' => 1,
            'created' => '2017-02-21 04:13:17',
            'modified' => '2017-02-21 04:13:17'
        ],
    ];
}
