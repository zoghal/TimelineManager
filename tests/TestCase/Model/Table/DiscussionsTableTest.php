<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DiscussionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DiscussionsTable Test Case
 */
class DiscussionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DiscussionsTable
     */
    public $Discussions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.discussions',
        'app.timelines'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Discussions') ? [] : ['className' => DiscussionsTable::class];
        $this->Discussions = TableRegistry::get('Discussions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Discussions);

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
