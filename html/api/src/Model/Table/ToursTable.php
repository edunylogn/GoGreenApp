<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tours Model
 *
 * @property \Cake\ORM\Association\HasMany $TourFeatures
 *
 * @method \App\Model\Entity\Tour get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tour newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tour[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tour|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tour patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tour[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tour findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ToursTable extends Table
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

        $this->table('tours');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('TourFeatures', [
            'foreignKey' => 'tour_id'
        ]);

        $this->belongsToMany('Features', [
            'foreignKey' => 'tour_id',
            'targetForeignKey' => 'feature_id',
            'joinTable' => 'tour_features'
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
            ->allowEmpty('description');

        $validator
            ->decimal('price')
            ->allowEmpty('price');

        $validator
            ->allowEmpty('company');

        $validator
            ->allowEmpty('duration');

        $validator
            ->allowEmpty('destination');

        $validator
            ->allowEmpty('address');

        $validator
            ->allowEmpty('latitude');

        $validator
            ->allowEmpty('longitude');

        $validator
            ->allowEmpty('available_date');

        return $validator;
    }
}
