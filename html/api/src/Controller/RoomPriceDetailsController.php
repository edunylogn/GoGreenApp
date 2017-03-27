<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RoomPriceDetails Controller
 *
 * @property \App\Model\Table\RoomPriceDetailsTable $RoomPriceDetails
 */
class RoomPriceDetailsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Places', 'RoomCategories']
        ];
        $roomPriceDetails = $this->paginate($this->RoomPriceDetails);

        $this->set(compact('roomPriceDetails'));
        $this->set('_serialize', ['roomPriceDetails']);
    }

    /**
     * View method
     *
     * @param string|null $id Room Price Detail id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $roomPriceDetail = $this->RoomPriceDetails->get($id, [
            'contain' => ['Places', 'RoomCategories']
        ]);

        $this->set('roomPriceDetail', $roomPriceDetail);
        $this->set('_serialize', ['roomPriceDetail']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $roomPriceDetail = $this->RoomPriceDetails->newEntity();
        if ($this->request->is('post')) {
            $roomPriceDetail = $this->RoomPriceDetails->patchEntity($roomPriceDetail, $this->request->data);
            if ($this->RoomPriceDetails->save($roomPriceDetail)) {
                $this->Flash->success(__('The room price detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The room price detail could not be saved. Please, try again.'));
        }
        $places = $this->RoomPriceDetails->Places->find('list', ['limit' => 200]);
        $roomCategories = $this->RoomPriceDetails->RoomCategories->find('list', ['limit' => 200]);
        $this->set(compact('roomPriceDetail', 'places', 'roomCategories'));
        $this->set('_serialize', ['roomPriceDetail']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Room Price Detail id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $roomPriceDetail = $this->RoomPriceDetails->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $roomPriceDetail = $this->RoomPriceDetails->patchEntity($roomPriceDetail, $this->request->data);
            if ($this->RoomPriceDetails->save($roomPriceDetail)) {
                $this->Flash->success(__('The room price detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The room price detail could not be saved. Please, try again.'));
        }
        $places = $this->RoomPriceDetails->Places->find('list', ['limit' => 200]);
        $roomCategories = $this->RoomPriceDetails->RoomCategories->find('list', ['limit' => 200]);
        $this->set(compact('roomPriceDetail', 'places', 'roomCategories'));
        $this->set('_serialize', ['roomPriceDetail']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Room Price Detail id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $roomPriceDetail = $this->RoomPriceDetails->get($id);
        if ($this->RoomPriceDetails->delete($roomPriceDetail)) {
            $this->Flash->success(__('The room price detail has been deleted.'));
        } else {
            $this->Flash->error(__('The room price detail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
