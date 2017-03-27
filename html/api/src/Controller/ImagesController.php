<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Lib\UtilityMethods;
use Cake\View\CellTrait;
use Bootstrap\View\Helper\BootstrapFlashHelper;
/**
 * Images Controller
 *
 * @property \App\Model\Table\ImagesTable $Images
 */
class ImagesController extends AppController
{
    use CellTrait;

    protected $flashH;

    public function initialize()
    {
        parent::initialize();
        $this->flashH = new BootstrapFlashHelper(new \Cake\View\View());
    }


    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $images = $this->paginate($this->Images);

        $this->set(compact('images'));
        $this->set('_serialize', ['images']);
    }

    /**
     * View method
     *
     * @param string|null $id Image id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $image = $this->Images->get($id, [
            'contain' => ['PlaceImages']
        ]);

        $this->set('image', $image);
        $this->set('_serialize', ['image']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $image = $this->Images->newEntity();
        if ($this->request->is('post')) {
            $image = $this->Images->patchEntity($image, $this->request->data);
            if ($this->Images->save($image)) {
                $this->Flash->success(__('The image has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The image could not be saved. Please, try again.'));
        }
        $this->set(compact('image'));
        $this->set('_serialize', ['image']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Image id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $image = $this->Images->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $image = $this->Images->PlaceImages->patchEntity($image, $this->request->data);
            if ($this->Images->save($image)) {
                $this->Flash->success(__('The image has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The image could not be saved. Please, try again.'));
        }
        $this->set(compact('image'));
        $this->set('_serialize', ['image']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Image id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $image = $this->Images->get($id);
        if ($this->Images->delete($image)) {
            $this->Flash->success(__('The image has been deleted.'));
        } else {
            $this->Flash->error(__('The image could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    /**
     * Images Tab
     */

    /**
     * Add Image
     */
    public function addImageToPlace(){
        $this->request->allowMethod(['post']);
        $session = $this->request->session();

        $result = [];

        $data = $this->request->data;

        $data['session'] = $this->request->session()->id();
        $image = $this->Images->newEntity();
        $image = $this->Images->patchEntity($image, $data);
        if ($image_result = $this->Images->save($image)) {
            $cellImageSelector = $this->cell('ImageSelector');
            $this->Flash->success(__('The image has been saved.'));
            $result['result_el'] = $cellImageSelector->render();
            $result['msg_el'] = $this->flashH->render('flash');
        }else{
            if($error_msg = UtilityMethods::getEntityErrors($image)){
                $this->Flash->error(
                    'The image could not be saved. Check the following error(s):<br>'.implode('<br/>', $error_msg), ['escape'=> false]
                );
            }else{
                $this->Flash->error(__('The image could not be saved. Please, try again.'));
            }
            $result['msg_el'] = $this->flashH->render('flash');
        }

        $this->response->body(json_encode($result));
        return $this->response;
    }

    public function deleteImageFromPlace(){
        $this->request->allowMethod(['post', 'delete']);

        $result = [];

        $data = $this->request->data;
        $image = $this->Images->get($data['image_id']);
        if ($image_result = $this->Images->delete($image)) {
            $cellImageSelector = $this->cell('ImageSelector');
            $this->Flash->success(__('The image has been deleted.'));
            $result['result_el'] = $cellImageSelector->render();
            $result['msg_el'] = $this->flashH->render();
        }else{
            $this->Flash->error(__('The image could not be deleted. Please, try again.'));
            $result['msg_el'] = $this->flashH->render();
        }
        $this->response->body(json_encode($result));
        return $this->response;
    }
}
