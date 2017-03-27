<?php
namespace App\Model\Table;

use ArrayObject;
use Cake\Event\Event;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\ORM\Entity;
use Cake\Validation\Validator;
use Cake\Filesystem\Folder;
use Cake\Filesystem\File;
use App\Model\Entity\Image;

/**
 * Images Model
 *
 * @property \Cake\ORM\Association\HasMany $PlaceImages
 *
 * @method \App\Model\Entity\Image get($primaryKey, $options = [])
 * @method \App\Model\Entity\Image newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Image[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Image|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Image patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Image[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Image findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ImagesTable extends Table
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

        $this->table('images');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('Josegonzalez/Upload.Upload', [
            'image' => [
                'path' => 'webroot{DS}files{DS}images_uploaded{DS}',
                'fields' => [
                    'dir' => 'file_path',
                    'size' => 'size',
                ],
                'nameCallback' => function ($data, $settings){
                    return time() .'-' .$data['name'];
                },
                // This can also be in a class that implements
                // the TransformerInterface or any callable type.
                'transformer' => function (\Cake\Datasource\RepositoryInterface $table, \Cake\Datasource\EntityInterface $entity, $data, $field, $settings) {
                    // get the extension from the file
                    // there could be better ways to do this, and it will fail
                    // if the file has no extension
                    $extension = pathinfo($data['name'], PATHINFO_EXTENSION);
                    // Store the thumbnail in a temporary file
                    $tmp = tempnam(sys_get_temp_dir(), 'upload') . '.' . $extension;
                    // Use the Imagine library to DO THE THING
                    $size = new \Imagine\Image\Box(200, 140);
                    $mode = \Imagine\Image\ImageInterface::THUMBNAIL_INSET;
                    $imagine = new \Imagine\Gd\Imagine();
                    // Save that modified file to our temp file
                    $imagine->open($data['tmp_name'])
                        ->thumbnail($size, $mode)
                        ->save($tmp);
                    // Now return the original *and* the thumbnail
                    return [
                        $data['tmp_name'] => $data['name'],
                        $tmp => 'thumb-' . $data['name'],
                    ];
                },
                'keepFilesOnDelete' => false
            ],
        ]);

        $this->belongsToMany('Places', [
            'foreignKey' => 'image_id',
            'targetForeignKey' => 'place_id',
            'joinTable' => 'place_images'
        ]);
        $this->hasMany('PlaceImages', [
            'foreignKey' => 'image_id'
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
        $validator->provider('image', \Josegonzalez\Upload\Validation\ImageValidation::class);
        $validator->provider('file', \Josegonzalez\Upload\Validation\UploadValidation::class);


        $validator->add('file', 'fileUnderPhpSizeLimit', [
            'rule' => 'isUnderPhpSizeLimit',
            'message' => 'This image is too large (1M)',
            'provider' => 'file'
        ]);

        $validator->add('image', 'fileAboveMinHeight', [
            'rule' => ['isAboveMinHeight', 200],
            'message' => 'This image should at least be 200px high',
            'provider' => 'image'
        ]);

        $validator->add('image', 'fileBelowMaxHeight', [
            'rule' => ['isBelowMaxHeight', 800],
            'message' => 'This image should not be higher than 900px',
            'provider' => 'image'
        ]);

        $validator->add('image', 'fileAboveMinWidth', [
            'rule' => ['isAboveMinWidth', 200],
            'message' => 'This image should at least be 200px wide',
            'provider' => 'image'
        ]);

        $validator->add('image', 'fileBelowMaxWidth', [
            'rule' => ['isBelowMaxWidth', 1000],
            'message' => 'This image should not be wider than 1000px',
            'provider' => 'image'
        ]);

        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('url');

        $validator
            ->allowEmpty('file_path');

        $validator
            ->allowEmpty('binary');

        return $validator;
    }


    public function afterDelete(Event $event, Image $entity, ArrayObject $options) {

        $dir = new Folder(ROOT . DS . $entity->file_path);
        $files = $dir->find('thumb-' . $entity->image);
        foreach ($files as $key => $file) {
            $file = new File($dir->pwd() . DS . $file);
            $file->delete();
            $file->close();
        }
    }
}
