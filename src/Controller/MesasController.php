<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Mesas Controller
 *
 * @property \App\Model\Table\MesasTable $Mesas
 * @method \App\Model\Entity\Mesa[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MesasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Meseros'],
        ];
        $mesas = $this->paginate($this->Mesas);

        $this->set(compact('mesas'));
    }

    /**
     * View method
     *
     * @param string|null $id Mesa id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mesa = $this->Mesas->get($id, [
            'contain' => ['Meseros'],
        ]);

        $this->set(compact('mesa'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mesa = $this->Mesas->newEmptyEntity();
        if ($this->request->is('post')) {
            $mesa = $this->Mesas->patchEntity($mesa, $this->request->getData());
            if ($this->Mesas->save($mesa)) {
                $this->Flash->success(__('The mesa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mesa could not be saved. Please, try again.'));
        }
        $meseros = $this->Mesas->Meseros->find('list', [
            'valueField' => 'nombre'
        ]);
        //$meseros = $this->Mesas->Meseros->find('list', ['limit' => 200]);
        $this->set(compact('mesa', 'meseros'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Mesa id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mesa = $this->Mesas->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mesa = $this->Mesas->patchEntity($mesa, $this->request->getData());
            if ($this->Mesas->save($mesa)) {
                $this->Flash->success(__('The mesa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mesa could not be saved. Please, try again.'));
        }
        $meseros = $this->Mesas->Meseros->find('list', ['limit' => 200]);
        $this->set(compact('mesa', 'meseros'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Mesa id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mesa = $this->Mesas->get($id);
        if ($this->Mesas->delete($mesa)) {
            $this->Flash->success(__('The mesa has been deleted.'));
        } else {
            $this->Flash->error(__('The mesa could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
