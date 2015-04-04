<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Suppliers Controller
 *
 * @property \App\Model\Table\SuppliersTable $Suppliers
 */
class SuppliersController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('suppliers', $this->paginate($this->Suppliers));
        $this->set('_serialize', ['suppliers']);
    }

    /**
     * View method
     *
     * @param string|null $id Supplier id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $supplier = $this->Suppliers->get($id, [
            'contain' => ['Products']
        ]);
        $this->set('supplier', $supplier);
        $this->set('_serialize', ['supplier']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $supplier = $this->Suppliers->newEntity();
        if ($this->request->is('post')) {
            $supplier = $this->Suppliers->patchEntity($supplier, $this->request->data);
            if ($this->Suppliers->save($supplier)) {
                $this->Flash->success('The supplier has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The supplier could not be saved. Please, try again.');
            }
        }
        $this->set(compact('supplier'));
        $this->set('_serialize', ['supplier']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Supplier id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $supplier = $this->Suppliers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $supplier = $this->Suppliers->patchEntity($supplier, $this->request->data);
            if ($this->Suppliers->save($supplier)) {
                $this->Flash->success('The supplier has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The supplier could not be saved. Please, try again.');
            }
        }
        $this->set(compact('supplier'));
        $this->set('_serialize', ['supplier']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Supplier id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $supplier = $this->Suppliers->get($id);
        if ($this->Suppliers->delete($supplier)) {
            $this->Flash->success('The supplier has been deleted.');
        } else {
            $this->Flash->error('The supplier could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
