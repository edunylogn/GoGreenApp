<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ToursTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ToursTable Test Case
 */
class ToursTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ToursTable
     */
    public $Tours;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tours',
        'app.tour_features',
        'app.features',
        'app.place_features',
        'app.transport_features'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Tours') ? [] : ['className' => 'App\Model\Table\ToursTable'];
        $this->Tours = TableRegistry::get('Tours', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tours);

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
