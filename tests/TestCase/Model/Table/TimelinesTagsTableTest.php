<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TimelinesTagsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TimelinesTagsTable Test Case
 */
class TimelinesTagsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TimelinesTagsTable
     */
    public $TimelinesTags;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.timelines_tags',
        'app.timelines',
        'app.discussions',
        'app.locations',
        'app.contacts',
        'app.timelines_contacts',
        'app.tags'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TimelinesTags') ? [] : ['className' => TimelinesTagsTable::class];
        $this->TimelinesTags = TableRegistry::get('TimelinesTags', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TimelinesTags);

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
