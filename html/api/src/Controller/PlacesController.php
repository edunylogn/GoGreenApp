<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Core\Exception\Exception;
use Cake\View\CellTrait;

/**
 * Places Controller
 *
 * @property \App\Model\Table\PlacesTable $Places
 */
class PlacesController extends AppController
{
    use CellTrait;

    public $title = 'Hotels';

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {

        $this->paginate = [
            'contain' => ['Regions']
        ];
        $places = $this->paginate($this->Places);

        $this->set(compact('places'));
        $this->set('_serialize', ['places']);

        //Alias title
        $this->set('pageTitle', $this->title);
    }

    /**
     * View method
     *
     * @param string|null $id Place id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $place = $this->Places->get($id, [
            'contain' => ['Regions', 'Tags', 'Features', 'Images', 'RoomPriceDetails']
        ]);

        $this->set('place', $place);
        $this->set('_serialize', ['place']);

        //Alias title
        $this->set('pageTitle', $this->title);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $place = $this->Places->newEntity();
        $data = $this->request->data;
        if ($this->request->is('post')) {
            $place = $this->Places->patchEntity($place, $data);
            if ($new_place = $this->Places->save($place)) {
                $prices = $this->Places->RoomPriceDetails->newEntities($data['room_price_details']);
                foreach ($prices as $price) {
                    $price->set('place_id', $new_place->get('id'));
                    $this->Places->RoomPriceDetails->save($price);
                }
                $this->Flash->success(__('The place has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The place could not be saved. Please, try again.'));
        }
        $regions = $this->Places->Regions->find('list', ['limit' => 200]);
        $tags = $this->Places->Tags->find('list', ['limit' => 200]);
        $features = $this->Places->Features->find('list', ['limit' => 200]);
        $this->set(compact('place', 'regions', 'tags', 'features', 'images'));
        $this->set('_serialize', ['place']);

        //Alias title
        $this->set('pageTitle', $this->title);
    }

    /**
     * Edit method
     *
     * @param string|null $id Place id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $place = $this->Places->get($id, [
            'contain' => ['Tags', 'Features', 'Images']
        ]);
        $data = $this->request->data;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $prices = $data['room_price_details'];
            unset($data['room_price_details']);
            $place = $this->Places->patchEntity($place, $data);
            if ($this->Places->save($place)) {
                foreach ($prices as $price_data) {
                    $price_result = $this->Places->RoomPriceDetails->get($price_data['id']);
                    $price = $this->Places->RoomPriceDetails->patchEntity($price_result,$price_data);
                    if (!$this->Places->RoomPriceDetails->save($price)) {
                        $this->Flash->error(__('The price detail could not be saved. Please, try again.'));
                    }
                }
                $this->Flash->success(__('The place has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The place could not be saved. Please, try again.'));
        }
        $regions = $this->Places->Regions->find('list', ['limit' => 200]);
        $tags = $this->Places->Tags->find('list', ['limit' => 200]);
        $features = $this->Places->Features->find('list', ['limit' => 200]);
        $this->set(compact('place', 'regions', 'tags', 'features', 'images'));
        $this->set('_serialize', ['place']);

        //Alias title
        $this->set('pageTitle', $this->title);
    }

    /**
     * Delete method
     *
     * @param string|null $id Place id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $place = $this->Places->get($id);
        if ($this->Places->delete($place)) {
            $this->Flash->success(__('The place has been deleted.'));
        } else {
            $this->Flash->error(__('The place could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
}
