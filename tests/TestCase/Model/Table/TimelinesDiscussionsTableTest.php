<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TimelinesDiscussionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TimelinesDiscussionsTable Test Case
 */
class TimelinesDiscussionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TimelinesDiscussionsTable
     */
    public $TimelinesDiscussions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.timelines_discussions',
        'app.timelines',
        'app.froms',
        'app.tos',
        'app.discussions',
        'app.locations',
        'app.tags',
        'app.timelines_tags',
        'app.contacts'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TimelinesDiscussions') ? [] : ['className' => TimelinesDiscussionsTable::class];
        $this->TimelinesDiscussions = TableRegistry::get('TimelinesDiscussions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TimelinesDiscussions);

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
