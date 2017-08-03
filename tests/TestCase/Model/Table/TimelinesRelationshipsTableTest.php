<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TimelinesRelationshipsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TimelinesRelationshipsTable Test Case
 */
class TimelinesRelationshipsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TimelinesRelationshipsTable
     */
    public $TimelinesRelationships;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.timelines_relationships',
        'app.timelines',
        'app.contacts',
        'app.discussions',
        'app.locations',
        'app.tags',
        'app.timelines_tags'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TimelinesRelationships') ? [] : ['className' => TimelinesRelationshipsTable::class];
        $this->TimelinesRelationships = TableRegistry::get('TimelinesRelationships', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TimelinesRelationships);

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
