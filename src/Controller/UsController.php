<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Us Controller
 *
 * @property \App\Model\Table\UsTable $Us
 */
class UsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Us->find();
        $us = $this->paginate($query);

        $this->set(compact('us'));
    }

    /**
     * View method
     *
     * @param string|null $id U id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $u = $this->Us->get($id, contain: []);
        $this->set(compact('u'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $u = $this->Us->newEmptyEntity();
        if ($this->request->is('post')) {
            $u = $this->Us->patchEntity($u, $this->request->getData());
            if ($this->Us->save($u)) {
                $this->Flash->success(__('The u has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The u could not be saved. Please, try again.'));
        }
        $this->set(compact('u'));
    }

    /**
     * Edit method
     *
     * @param string|null $id U id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $u = $this->Us->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $u = $this->Us->patchEntity($u, $this->request->getData());
            if ($this->Us->save($u)) {
                $this->Flash->success(__('The u has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The u could not be saved. Please, try again.'));
        }
        $this->set(compact('u'));
    }

    /**
     * Delete method
     *
     * @param string|null $id U id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $u = $this->Us->get($id);
        if ($this->Us->delete($u)) {
            $this->Flash->success(__('The u has been deleted.'));
        } else {
            $this->Flash->error(__('The u could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
