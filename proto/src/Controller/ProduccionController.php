<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Produccion Controller
 *
 * @property \App\Model\Table\ProduccionTable $Produccion
 */
class ProduccionController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Produccion->find();
        $produccion = $this->paginate($query);

        $this->set(compact('produccion'));
    }

    /**
     * View method
     *
     * @param string|null $id Produccion id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $produccion = $this->Produccion->get($id, contain: []);
        $this->set(compact('produccion'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $produccion = $this->Produccion->newEmptyEntity();
        if ($this->request->is('post')) {
            $produccion = $this->Produccion->patchEntity($produccion, $this->request->getData());
            if ($this->Produccion->save($produccion)) {
                $this->Flash->success(__('The produccion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The produccion could not be saved. Please, try again.'));
        }
        $this->set(compact('produccion'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Produccion id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $produccion = $this->Produccion->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $produccion = $this->Produccion->patchEntity($produccion, $this->request->getData());
            if ($this->Produccion->save($produccion)) {
                $this->Flash->success(__('The produccion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The produccion could not be saved. Please, try again.'));
        }
        $this->set(compact('produccion'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Produccion id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $produccion = $this->Produccion->get($id);
        if ($this->Produccion->delete($produccion)) {
            $this->Flash->success(__('The produccion has been deleted.'));
        } else {
            $this->Flash->error(__('The produccion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
