<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Oficina Controller
 *
 * @property \App\Model\Table\OficinaTable $Oficina
 */
class OficinaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Oficina->find();
        $oficina = $this->paginate($query);

        $this->set(compact('oficina'));
    }

    /**
     * View method
     *
     * @param string|null $id Oficina id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $oficina = $this->Oficina->get($id, contain: []);
        $this->set(compact('oficina'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $oficina = $this->Oficina->newEmptyEntity();
        if ($this->request->is('post')) {
            $oficina = $this->Oficina->patchEntity($oficina, $this->request->getData());
            if ($this->Oficina->save($oficina)) {
                $this->Flash->success(__('The oficina has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The oficina could not be saved. Please, try again.'));
        }
        $this->set(compact('oficina'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Oficina id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $oficina = $this->Oficina->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $oficina = $this->Oficina->patchEntity($oficina, $this->request->getData());
            if ($this->Oficina->save($oficina)) {
                $this->Flash->success(__('The oficina has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The oficina could not be saved. Please, try again.'));
        }
        $this->set(compact('oficina'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Oficina id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $oficina = $this->Oficina->get($id);
        if ($this->Oficina->delete($oficina)) {
            $this->Flash->success(__('The oficina has been deleted.'));
        } else {
            $this->Flash->error(__('The oficina could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
