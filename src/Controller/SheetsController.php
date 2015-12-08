<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sheets Controller
 *
 * @property \App\Model\Table\SheetsTable $Sheets
 */
class SheetsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Games', 'Users']
        ];
        $this->set('sheets', $this->paginate($this->Sheets));
        $this->set('_serialize', ['sheets']);
    }

    /**
     * View method
     *
     * @param string|null $id Sheet id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sheet = $this->Sheets->get($id, [
            'contain' => ['Games', 'Users']
        ]);
        $this->set('sheet', $sheet);
        $this->set('_serialize', ['sheet']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sheet = $this->Sheets->newEntity();
        if ($this->request->is('post')) {
            $sheet = $this->Sheets->patchEntity($sheet, $this->request->data);
            if ($this->Sheets->save($sheet)) {
                $this->Flash->success(__('The sheet has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The sheet could not be saved. Please, try again.'));
            }
        }
        $games = $this->Sheets->Games->find('list', ['limit' => 200]);
        $users = $this->Sheets->Users->find('list', ['limit' => 200]);
        $this->set(compact('sheet', 'games', 'users'));
        $this->set('_serialize', ['sheet']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Sheet id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sheet = $this->Sheets->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sheet = $this->Sheets->patchEntity($sheet, $this->request->data);
            if ($this->Sheets->save($sheet)) {
                $this->Flash->success(__('The sheet has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The sheet could not be saved. Please, try again.'));
            }
        }
        $games = $this->Sheets->Games->find('list', ['limit' => 200]);
        $users = $this->Sheets->Users->find('list', ['limit' => 200]);
        $this->set(compact('sheet', 'games', 'users'));
        $this->set('_serialize', ['sheet']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Sheet id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sheet = $this->Sheets->get($id);
        if ($this->Sheets->delete($sheet)) {
            $this->Flash->success(__('The sheet has been deleted.'));
        } else {
            $this->Flash->error(__('The sheet could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
