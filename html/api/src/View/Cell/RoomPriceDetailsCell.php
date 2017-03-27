<?php
namespace App\View\Cell;

use Cake\View\Cell;

/**
 * RoomPriceDetails cell
 */
class RoomPriceDetailsCell extends Cell
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
    public function display()
    {
        $this->loadModel('RoomCategories');
        $roomCategories = $this->RoomCategories->find('all', [
            'fields' => ['id', 'title']
        ]);

        $this->set(compact('roomCategories'));
    }

    public function view($place_id, $edition)
    {
        $this->loadModel('RoomCategories');
        $roomCategories = $this->RoomCategories->find('all', [
            'fields' => ['id', 'title']
        ]);

        $this->loadModel('RoomPriceDetails');
        $roomPriceDetails = $this->RoomPriceDetails->find('all', [
            'conditions' => ['place_id' => $place_id]
        ])->toArray();

        if($edition){
            $this->template = 'edit';
        }
        $this->set(compact('roomCategories', 'roomPriceDetails'));
    }
}
