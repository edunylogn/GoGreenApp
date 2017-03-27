<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RoomCategoriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RoomCategoriesTable Test Case
 */
class RoomCategoriesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RoomCategoriesTable
     */
    public $RoomCategories;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.room_categories',
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
        'app.place_images'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('RoomCategories') ? [] : ['className' => 'App\Model\Table\RoomCategoriesTable'];
        $this->RoomCategories = TableRegistry::get('RoomCategories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RoomCategories);

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
}
