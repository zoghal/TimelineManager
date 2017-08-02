<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contact Entity
 *
 * @property int $id
 * @property string $name
 * @property string $family
 * @property string $label
 * @property string $twitter1
 * @property string $twitter2
 * @property string $facebook
 * @property string $instagram
 * @property string $github
 * @property string $note
 */
class Contact extends Entity
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
    
    protected $_virtual = ['full_name'];

    protected function _getFullName()
    {
        return $this->_properties['name'] . '  ' .
            $this->_properties['family'];
    }    
}
