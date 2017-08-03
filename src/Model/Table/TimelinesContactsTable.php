<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TimelinesContacts Model
 *
 * @property \App\Model\Table\TimelinesTable|\Cake\ORM\Association\BelongsTo $Timelines
 * @property \App\Model\Table\ContactsTable|\Cake\ORM\Association\BelongsTo $Contacts
 *
 * @method \App\Model\Entity\TimelinesContact get($primaryKey, $options = [])
 * @method \App\Model\Entity\TimelinesContact newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TimelinesContact[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TimelinesContact|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TimelinesContact patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TimelinesContact[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TimelinesContact findOrCreate($search, callable $callback = null, $options = [])
 */
class TimelinesContactsTable extends Table
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

        $this->setTable('timelines_contacts');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Timelines', [
            'foreignKey' => 'timeline_id'
        ]);
        $this->belongsTo('Contacts', [
            'foreignKey' => 'contact_id'
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

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['timeline_id'], 'Timelines'));
        $rules->add($rules->existsIn(['contact_id'], 'Contacts'));

        return $rules;
    }
}
