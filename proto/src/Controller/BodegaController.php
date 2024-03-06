<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Bodega Controller
 *
 * @property \App\Model\Table\BodegaTable $Bodega
 */
class BodegaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Bodega->find();
        $bodega = $this->paginate($query);

        $this->set(compact('bodega'));
    }

    /**
     * View method
     *
     * @param string|null $id Bodega id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bodega = $this->Bodega->get($id, contain: []);
        $this->set(compact('bodega'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bodega = $this->Bodega->newEmptyEntity();
        if ($this->request->is('post')) {
            $bodega = $this->Bodega->patchEntity($bodega, $this->request->getData());
            if ($this->Bodega->save($bodega)) {
                $this->Flash->success(__('The bodega has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bodega could not be saved. Please, try again.'));
        }
        $this->set(compact('bodega'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Bodega id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bodega = $this->Bodega->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bodega = $this->Bodega->patchEntity($bodega, $this->request->getData());
            if ($this->Bodega->save($bodega)) {
                $this->Flash->success(__('The bodega has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bodega could not be saved. Please, try again.'));
        }
        $this->set(compact('bodega'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bodega id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bodega = $this->Bodega->get($id);
        if ($this->Bodega->delete($bodega)) {
            $this->Flash->success(__('The bodega has been deleted.'));
        } else {
            $this->Flash->error(__('The bodega could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
