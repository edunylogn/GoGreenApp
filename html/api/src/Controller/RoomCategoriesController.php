<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RoomCategories Controller
 *
 * @property \App\Model\Table\RoomCategoriesTable $RoomCategories
 */
class RoomCategoriesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $roomCategories = $this->paginate($this->RoomCategories);

        $this->set(compact('roomCategories'));
        $this->set('_serialize', ['roomCategories']);
    }

    /**
     * View method
     *
     * @param string|null $id Room Category id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $roomCategory = $this->RoomCategories->get($id, [
            'contain' => ['RoomPriceDetails']
        ]);

        $this->set('roomCategory', $roomCategory);
        $this->set('_serialize', ['roomCategory']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $roomCategory = $this->RoomCategories->newEntity();
        if ($this->request->is('post')) {
            $roomCategory = $this->RoomCategories->patchEntity($roomCategory, $this->request->data);
            if ($this->RoomCategories->save($roomCategory)) {
                $this->Flash->success(__('The room category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The room category could not be saved. Please, try again.'));
        }
        $this->set(compact('roomCategory'));
        $this->set('_serialize', ['roomCategory']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Room Category id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $roomCategory = $this->RoomCategories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $roomCategory = $this->RoomCategories->patchEntity($roomCategory, $this->request->data);
            if ($this->RoomCategories->save($roomCategory)) {
                $this->Flash->success(__('The room category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The room category could not be saved. Please, try again.'));
        }
        $this->set(compact('roomCategory'));
        $this->set('_serialize', ['roomCategory']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Room Category id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $roomCategory = $this->RoomCategories->get($id);
        if ($this->RoomCategories->delete($roomCategory)) {
            $this->Flash->success(__('The room category has been deleted.'));
        } else {
            $this->Flash->error(__('The room category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
