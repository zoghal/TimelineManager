<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TimelinesContactsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TimelinesContactsTable Test Case
 */
class TimelinesContactsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TimelinesContactsTable
     */
    public $TimelinesContacts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.timelines_contacts',
        'app.timelines',
        'app.discussions',
        'app.locations',
        'app.contacts',
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
        $config = TableRegistry::exists('TimelinesContacts') ? [] : ['className' => TimelinesContactsTable::class];
        $this->TimelinesContacts = TableRegistry::get('TimelinesContacts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TimelinesContacts);

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
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
