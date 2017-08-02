<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TimelinesTags Model
 *
 * @property \App\Model\Table\TimelinesTable|\Cake\ORM\Association\BelongsTo $Timelines
 * @property \App\Model\Table\TagsTable|\Cake\ORM\Association\BelongsTo $Tags
 *
 * @method \App\Model\Entity\TimelinesTag get($primaryKey, $options = [])
 * @method \App\Model\Entity\TimelinesTag newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TimelinesTag[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TimelinesTag|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TimelinesTag patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TimelinesTag[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TimelinesTag findOrCreate($search, callable $callback = null, $options = [])
 */
class TimelinesTagsTable extends Table
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

        $this->setTable('timelines_tags');

        $this->belongsTo('Timelines', [
            'foreignKey' => 'timeline_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Tags', [
            'foreignKey' => 'tag_id',
            'joinType' => 'INNER'
        ]);
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
        $rules->add($rules->existsIn(['tag_id'], 'Tags'));

        return $rules;
    }
}
