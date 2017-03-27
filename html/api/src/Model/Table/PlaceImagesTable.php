<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PlaceImages Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Places
 * @property \Cake\ORM\Association\BelongsTo $Images
 *
 * @method \App\Model\Entity\PlaceImage get($primaryKey, $options = [])
 * @method \App\Model\Entity\PlaceImage newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PlaceImage[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PlaceImage|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PlaceImage patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PlaceImage[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PlaceImage findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PlaceImagesTable extends Table
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

        $this->table('place_images');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Places', [
            'dependent' => true,
            'foreignKey' => 'place_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Images', [
            'dependent' => true,
            'foreignKey' => 'image_id',
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
            ->requirePresence('legend', 'create')
            ->notEmpty('legend');

        $validator
            ->boolean('active')
            ->requirePresence('active', 'create')
            ->notEmpty('active');

        $validator
            ->integer('position')
            ->allowEmpty('position');

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
        $rules->add($rules->existsIn(['image_id'], 'Images'));

        return $rules;
    }
}
