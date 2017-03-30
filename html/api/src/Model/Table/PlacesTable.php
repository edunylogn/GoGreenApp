<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Places Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Regions
 * @property \Cake\ORM\Association\HasMany $PlaceFeatures
 * @property \Cake\ORM\Association\HasMany $PlaceImages
 * @property \Cake\ORM\Association\HasMany $PlaceTags
 * @property \Cake\ORM\Association\HasMany $RoomPriceDetails
 *
 * @method \App\Model\Entity\Place get($primaryKey, $options = [])
 * @method \App\Model\Entity\Place newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Place[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Place|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Place patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Place[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Place findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PlacesTable extends Table
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

        $this->table('places');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Regions', [
            'foreignKey' => 'region_id'
        ]);
        $this->belongsToMany('Tags', [
            'foreignKey' => 'place_id',
            'targetForeignKey' => 'tag_id',
            'joinTable' => 'place_tags'
        ]);
        $this->belongsToMany('Features', [
            'foreignKey' => 'place_id',
            'targetForeignKey' => 'feature_id',
            'joinTable' => 'place_features'
        ]);
        $this->belongsToMany('Images', [
            'foreignKey' => 'place_id',
            'targetForeignKey' => 'image_id',
            'joinTable' => 'place_images'
        ]);
        $this->hasMany('PlaceFeatures', [
            'foreignKey' => 'place_id'
        ]);
        $this->hasMany('PlaceImages', [
            'foreignKey' => 'place_id'
        ]);
        $this->hasMany('PlaceTags', [
            'foreignKey' => 'place_id'
        ]);
        $this->hasMany('RoomPriceDetails', [
            'foreignKey' => 'place_id'
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
            ->allowEmpty('latitude');

        $validator
            ->allowEmpty('longitude');

        $validator
            ->boolean('completed')
            ->allowEmpty('completed');

        $validator
            ->integer('rating')
            ->allowEmpty('rating');

        $validator
            ->allowEmpty('maps_url');

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
        $rules->add($rules->existsIn(['region_id'], 'Regions'));
        $rules->add($rules->isUnique(['name']));
        return $rules;
    }
}
