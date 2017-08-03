<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TimelinesRelationship Entity
 *
 * @property int $id
 * @property int $timeline_id
 * @property int $contact_id
 *
 * @property \App\Model\Entity\Timeline $timeline
 * @property \App\Model\Entity\Contact $contact
 */
class TimelinesRelationship extends Entity
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
