<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\Event\EventInterface;
/**
 * Meseros Controller
 *
 * @property \App\Model\Table\MeserosTable $Meseros
 * @method \App\Model\Entity\Mesero[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MeserosController extends AppController
{
    // public $helpers = array("Html", 'Form');
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */

    public function beforeFilter(EventInterface $event)
    {
        $this->viewBuilder()->setLayout('header');
        // debug($event);
        // exit;
    }

    public function index()
    {
        $this->loadModel('meseros');
        $meseros = $this->Meseros->find('all');
        $this->set('meseros',$meseros);
        // $meseros = $this->paginate($this->Meseros);
        
        // $this->set(compact('meseros'));
    }

    public function ver($id = null)
    {
        if (!$id) {
            throw new Exception("Datos invalidos", 1);
        }
        $mesero=$this->Meseros->findById($id);

        if(!$mesero){
            throw new Exception("El mesero no existe", 1);
        }
        $this->set('mesero', $mesero);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mesero = $this->Meseros->newEmptyEntity();
        if ($this->request->is('post')) {
            $mesero = $this->Meseros->patchEntity($mesero, $this->request->getData());
            if ($this->Meseros->save($mesero)) {
                $this->Flash->success(__('The mesero has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mesero could not be saved. Please, try again.'));
        }
        $this->set(compact('mesero'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Mesero id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mesero = $this->Meseros->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mesero = $this->Meseros->patchEntity($mesero, $this->request->getData());
            if ($this->Meseros->save($mesero)) {
                $this->Flash->success(__('The mesero has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mesero could not be saved. Please, try again.'));
        }
        $this->set(compact('mesero'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Mesero id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mesero = $this->Meseros->get($id);
        if ($this->Meseros->delete($mesero)) {
            $this->Flash->success(__('The mesero has been deleted.'));
        } else {
            $this->Flash->error(__('The mesero could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
