<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Transports Model
 *
 * @property \Cake\ORM\Association\HasMany $TransportFeatures
 *
 * @method \App\Model\Entity\Transport get($primaryKey, $options = [])
 * @method \App\Model\Entity\Transport newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Transport[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Transport|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Transport patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Transport[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Transport findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TransportsTable extends Table
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

        $this->table('transports');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('TransportFeatures', [
            'foreignKey' => 'transport_id'
        ]);

        $this->belongsToMany('Features', [
            'foreignKey' => 'transport_id',
            'targetForeignKey' => 'feature_id',
            'joinTable' => 'transport_features'
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
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->requirePresence('price_day', 'create')
            ->notEmpty('price_day');

        $validator
            ->requirePresence('supplier', 'create')
            ->notEmpty('supplier');

        $validator
            ->requirePresence('brand', 'create')
            ->notEmpty('brand');

        $validator
            ->requirePresence('type', 'create')
            ->notEmpty('type');

        $validator
            ->integer('seats')
            ->allowEmpty('seats');

        $validator
            ->integer('doors')
            ->allowEmpty('doors');

        $validator
            ->allowEmpty('available_date');

        return $validator;
    }
}
