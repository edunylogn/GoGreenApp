<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Regions Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ParentRegions
 * @property \Cake\ORM\Association\HasMany $Places
 * @property \Cake\ORM\Association\HasMany $ChildRegions
 *
 * @method \App\Model\Entity\Region get($primaryKey, $options = [])
 * @method \App\Model\Entity\Region newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Region[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Region|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Region patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Region[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Region findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RegionsTable extends Table
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

        $this->table('regions');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('ParentRegions', [
            'className' => 'Regions',
            'foreignKey' => 'parent_id'
        ]);
        $this->hasMany('Places', [
            'foreignKey' => 'region_id'
        ]);
        $this->hasMany('ChildRegions', [
            'className' => 'Regions',
            'foreignKey' => 'parent_id'
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->integer('left')
            ->allowEmpty('left');

        $validator
            ->integer('right')
            ->allowEmpty('right');

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
        $rules->add($rules->existsIn(['parent_id'], 'ParentRegions'));

        return $rules;
    }
}
