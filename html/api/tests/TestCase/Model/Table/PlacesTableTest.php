<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PlacesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PlacesTable Test Case
 */
class PlacesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PlacesTable
     */
    public $Places;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        'app.room_price_details',
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
        $config = TableRegistry::exists('Places') ? [] : ['className' => 'App\Model\Table\PlacesTable'];
        $this->Places = TableRegistry::get('Places', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Places);

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
