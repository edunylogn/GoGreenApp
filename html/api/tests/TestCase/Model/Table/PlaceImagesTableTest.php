<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PlaceImagesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PlaceImagesTable Test Case
 */
class PlaceImagesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PlaceImagesTable
     */
    public $PlaceImages;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.place_images',
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
        $config = TableRegistry::exists('PlaceImages') ? [] : ['className' => 'App\Model\Table\PlaceImagesTable'];
        $this->PlaceImages = TableRegistry::get('PlaceImages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PlaceImages);

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
