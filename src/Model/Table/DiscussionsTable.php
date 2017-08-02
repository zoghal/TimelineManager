<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Discussions Model
 *
 * @property \App\Model\Table\TimelinesTable|\Cake\ORM\Association\HasMany $Timelines
 *
 * @method \App\Model\Entity\Discussion get($primaryKey, $options = [])
 * @method \App\Model\Entity\Discussion newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Discussion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Discussion|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Discussion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Discussion[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Discussion findOrCreate($search, callable $callback = null, $options = [])
 */
class DiscussionsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('discussions');
        $this->setDisplayField('label');
        $this->setPrimaryKey('id');

        $this->hasMany('Timelines', [
            'foreignKey' => 'discussion_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('label');

        $validator
            ->integer('timeline_count')
            ->allowEmpty('timeline_count');

        return $validator;
    }
}
