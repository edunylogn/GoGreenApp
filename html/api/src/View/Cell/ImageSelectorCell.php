<?php
namespace App\View\Cell;

use Cake\View\Cell;

/**
 * ImageSelector cell
 */
class ImageSelectorCell extends Cell
{

    /**
     * List of valid options that can be passed into this
     * cell's constructor.
     *
     * @var array
     */
    protected $_validCellOptions = [];

    /**
     * Default display method.
     *
     * @return void
     */
    public function display(array $params = [])
    {
        $this->loadModel('Images');
        $images = $this->Images->find('all', [
            'fields' => ['id', 'file_path', 'image'],
            'limit' => 10,
            'join' => [
                [
                    'table' => 'place_images',
                    'alias' => 'PlaceImages',
                    'type' => 'LEFT',
                    'conditions' => [
                        'Images.id = PlaceImages.image_id'
                    ]
                ]
            ],
            'conditions' => ['session' => $this->request->session()->id(), 'PlaceImages.image_id is NULL']
        ]);
        $this->set(compact('images'));
    }

    public function displayForEdit($placeId)
    {
        $this->loadModel('Images');
        $images = $this->Images->find('all', [
            'fields' => ['id', 'file_path', 'image'],
            'limit' => 10,
            'join' => [
                [
                    'table' => 'place_images',
                    'alias' => 'PlaceImages',
                    'type' => 'INNER',
                    'conditions' => [
                        'Images.id = PlaceImages.image_id'
                    ]
                ]
            ],
            'conditions' => ['PlaceImages.place_id' => $placeId]
        ]);
        $this->template = 'display';
        $this->set(compact('images'));
    }
}
