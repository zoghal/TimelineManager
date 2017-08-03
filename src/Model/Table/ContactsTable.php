<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
* Contacts Model
*
* @property \App\Model\Table\TimelinesTable|\Cake\ORM\Association\HasMany $Timelines
* @property \App\Model\Table\TimelinesRelationshipsTable|\Cake\ORM\Association\HasMany $TimelinesRelationships
*
* @method \App\Model\Entity\Contact get($primaryKey, $options = [])
* @method \App\Model\Entity\Contact newEntity($data = null, array $options = [])
* @method \App\Model\Entity\Contact[] newEntities(array $data, array $options = [])
* @method \App\Model\Entity\Contact|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
* @method \App\Model\Entity\Contact patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
* @method \App\Model\Entity\Contact[] patchEntities($entities, array $data, array $options = [])
* @method \App\Model\Entity\Contact findOrCreate($search, callable $callback = null, $options = [])
*/
class ContactsTable extends Table
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

        $this->setTable('contacts');
        $this->setDisplayField('fullName');
        $this->setPrimaryKey('id');

      

        $this->hasMany('Timelines', [
                'foreignKey' => 'contact_id'
            ]);

        $this->belongsToMany('Relates', [
                'foreignKey' => 'contact_id',
                'targetForeignKey' => 'timeline_id',
                'joinTable' => 'timelines_relationships'

            ]);

        $this->belongsToMany('Relates', [
                'foreignKey' => 'contact_id',
                'targetForeignKey' => 'timeline_id',
                'joinTable' => 'timelines_contacts'
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
        ->notEmpty('name');

        $validator
        ->notEmpty('family');

        $validator
        ->allowEmpty('label');

        $validator
        ->allowEmpty('twitter1');

        $validator
        ->allowEmpty('twitter2');

        $validator
        ->allowEmpty('facebook');

        $validator
        ->allowEmpty('instagram');

        $validator
        ->allowEmpty('github');

        $validator
        ->allowEmpty('note');

        /*
        $validator->provider('upload', \Josegonzalez\Upload\Validation\UploadValidation::class);

        $VALIDATOR->ADD('AVATAR', 'PROFFER', [
        'RULE' => ['DIMENSIONS', [
        'MIN' => ['W' => 100, 'H' => 100],
        'MAX' => ['W' => 500, 'H' => 500]
        ]],
        'MESSAGE' => 'IMAGE IS NOT CORRECT DIMENSIONS.',
        'PROVIDER' => 'PROFFER'
        ]);*/
        return $validator;
    }
}
