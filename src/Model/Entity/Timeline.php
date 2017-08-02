<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Timeline Entity
 *
 * @property int $id
 * @property string $caption
 * @property \Cake\I18n\FrozenDate $occur
 * @property int $cantact_id
 * @property bool $private
 * @property int $order
 * @property int $discussion_id
 * @property int $locate_id
 * @property string $note
 * @property bool $published
 * @property string $source_url
 * @property string $source_freeze
 * @property string $source_screen
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Cantact $cantact
 * @property \App\Model\Entity\Discussion $discussion
 * @property \App\Model\Entity\Location $location
 * @property \App\Model\Entity\TimelinesRelation[] $timelines_relations
 * @property \App\Model\Entity\Tag[] $tags
 */
class Timeline extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
