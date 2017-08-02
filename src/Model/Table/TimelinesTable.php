<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Timelines Model
 *
 * @property \App\Model\Table\CantactsTable|\Cake\ORM\Association\BelongsTo $Cantacts
 * @property \App\Model\Table\DiscussionsTable|\Cake\ORM\Association\BelongsTo $Discussions
 * @property \App\Model\Table\LocationsTable|\Cake\ORM\Association\BelongsTo $Locations
 * @property \App\Model\Table\TimelinesRelationsTable|\Cake\ORM\Association\HasMany $TimelinesRelations
 * @property \App\Model\Table\TagsTable|\Cake\ORM\Association\BelongsToMany $Tags
 *
 * @method \App\Model\Entity\Timeline get($primaryKey, $options = [])
 * @method \App\Model\Entity\Timeline newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Timeline[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Timeline|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Timeline patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Timeline[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Timeline findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 * @mixin \Cake\ORM\Behavior\CounterCacheBehavior
 */
class TimelinesTable extends Table
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

        $this->setTable('timelines');
        $this->setDisplayField('caption');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('CounterCache', ['Discussions' => ['timeline_count']]);

        $this->belongsTo('Cantacts', [
            'foreignKey' => 'cantact_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Discussions', [
            'foreignKey' => 'discussion_id'
        ]);
        $this->belongsTo('Locations', [
            'foreignKey' => 'locate_id'
        ]);
        $this->hasMany('TimelinesRelations', [
            'foreignKey' => 'timeline_id'
        ]);
        $this->belongsToMany('Tags', [
            'foreignKey' => 'timeline_id',
            'targetForeignKey' => 'tag_id',
            'joinTable' => 'timelines_tags'
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
            ->requirePresence('caption', 'create')
            ->notEmpty('caption');

        $validator
            ->date('occur')
            ->requirePresence('occur', 'create')
            ->notEmpty('occur');

        $validator
            ->boolean('private')
            ->requirePresence('private', 'create')
            ->notEmpty('private');

        $validator
            ->integer('order')
            ->allowEmpty('order');

        $validator
            ->allowEmpty('note');

        $validator
            ->boolean('published')
            ->requirePresence('published', 'create')
            ->notEmpty('published');

        $validator
            ->allowEmpty('source_url');

        $validator
            ->allowEmpty('source_freeze');

        $validator
            ->allowEmpty('source_screen');

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
        $rules->add($rules->existsIn(['cantact_id'], 'Cantacts'));
        $rules->add($rules->existsIn(['discussion_id'], 'Discussions'));
        $rules->add($rules->existsIn(['locate_id'], 'Locations'));

        return $rules;
    }
}
