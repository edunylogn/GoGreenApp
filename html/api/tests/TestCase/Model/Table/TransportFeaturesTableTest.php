<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TransportFeaturesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TransportFeaturesTable Test Case
 */
class TransportFeaturesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TransportFeaturesTable
     */
    public $TransportFeatures;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.transport_features',
        'app.transports',
        'app.features',
        'app.place_features'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TransportFeatures') ? [] : ['className' => 'App\Model\Table\TransportFeaturesTable'];
        $this->TransportFeatures = TableRegistry::get('TransportFeatures', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TransportFeatures);

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
