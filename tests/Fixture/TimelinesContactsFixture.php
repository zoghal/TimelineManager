<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TimelinesContactsFixture
 *
 */
class TimelinesContactsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'timeline_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'contact_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'timeline_id' => ['type' => 'index', 'columns' => ['timeline_id'], 'length' => []],
            'contact_id' => ['type' => 'index', 'columns' => ['contact_id'], 'length' => []],
        ],
        '_constraints' => [
            'timelines_contacts_ibfk_1' => ['type' => 'foreign', 'columns' => ['timeline_id'], 'references' => ['timelines', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'timelines_contacts_ibfk_2' => ['type' => 'foreign', 'columns' => ['contact_id'], 'references' => ['contacts', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_persian_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'timeline_id' => 1,
            'contact_id' => 1
        ],
    ];
}
