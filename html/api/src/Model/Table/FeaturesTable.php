<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Features Model
 *
 * @property \Cake\ORM\Association\HasMany $PlaceFeatures
 *
 * @method \App\Model\Entity\Feature get($primaryKey, $options = [])
 * @method \App\Model\Entity\Feature newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Feature[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Feature|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Feature patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Feature[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Feature findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FeaturesTable extends Table
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

        $this->table('features');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('PlaceFeatures', [
            'foreignKey' => 'feature_id'
        ]);
        $this->hasMany('TransportFeatures', [
            'foreignKey' => 'feature_id'
        ]);
        $this->hasMany('TourFeatures', [
            'foreignKey' => 'feature_id'
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
            ->requirePresence('feature_category', 'create')
            ->notEmpty('feature_category');

        return $validator;
    }

    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['name']));

        return $rules;
    }
}
