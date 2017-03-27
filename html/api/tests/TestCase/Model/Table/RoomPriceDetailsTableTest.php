<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RoomPriceDetailsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RoomPriceDetailsTable Test Case
 */
class RoomPriceDetailsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RoomPriceDetailsTable
     */
    public $RoomPriceDetails;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.room_price_details',
        'app.places',
        'app.regions',
        'app.tags',
        'app.bookmarks',
        'app.users',
        'app.bookmarks_tags',
        'app.place_tags',
        'app.features',
        'app.place_features',
        'app.images',
        'app.place_images',
        'app.room_categories'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('RoomPriceDetails') ? [] : ['className' => 'App\Model\Table\RoomPriceDetailsTable'];
        $this->RoomPriceDetails = TableRegistry::get('RoomPriceDetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RoomPriceDetails);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
