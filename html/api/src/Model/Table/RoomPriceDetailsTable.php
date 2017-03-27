<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Event\Event;
use ArrayObject;

/**
 * RoomPriceDetails Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Places
 * @property \Cake\ORM\Association\BelongsTo $RoomCategories
 *
 * @method \App\Model\Entity\RoomPriceDetail get($primaryKey, $options = [])
 * @method \App\Model\Entity\RoomPriceDetail newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RoomPriceDetail[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RoomPriceDetail|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RoomPriceDetail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RoomPriceDetail[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RoomPriceDetail findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RoomPriceDetailsTable extends Table
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

        $this->table('room_price_details');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Places', [
            'foreignKey' => 'place_id'
        ]);
        $this->belongsTo('RoomCategories', [
            'foreignKey' => 'room_category_id',
            'joinType' => 'INNER'
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
            ->decimal('price')
            ->allowEmpty('price');

        $validator
            ->decimal('special_price')
            ->allowEmpty('special_price');

        $validator
            ->integer('rooms_number')
            ->allowEmpty('rooms_number');

        $validator
            ->integer('rooms_avaliable')
            ->allowEmpty('rooms_avaliable');

        $validator
            ->requirePresence('room_size', 'create')
            ->notEmpty('room_size');

        $validator
            ->allowEmpty('available_date');

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
        $rules->add($rules->existsIn(['place_id'], 'Places'));
        $rules->add($rules->existsIn(['room_category_id'], 'RoomCategories'));

        return $rules;
    }

}
