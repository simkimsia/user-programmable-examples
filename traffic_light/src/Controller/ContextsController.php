<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Contexts Controller
 *
 * @property App\Model\Table\ContextsTable $Contexts
 */
class ContextsController extends AppController {

/**
 * Index method
 *
 * @return void
 */
	public function index() {
		$this->set('contexts', $this->paginate($this->Contexts));
	}

/**
 * View method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function view($id = null) {
		$context = $this->Contexts->get($id, [
			'contain' => []
		]);
		$this->set('context', $context);
	}

/**
 * Add method
 *
 * @return void
 */
	public function add() {
		$context = $this->Contexts->newEntity($this->request->data);
		if ($this->request->is('post')) {
			if ($this->Contexts->save($context)) {
				$this->Flash->success('The context has been saved.');
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('The context could not be saved. Please, try again.');
			}
		}
		$this->set(compact('context'));
	}

/**
 * Edit method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function edit($id = null) {
		$context = $this->Contexts->get($id, [
			'contain' => []
		]);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$context = $this->Contexts->patchEntity($context, $this->request->data);
			if ($this->Contexts->save($context)) {
				$this->Flash->success('The context has been saved.');
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('The context could not be saved. Please, try again.');
			}
		}
		$this->set(compact('context'));
	}

/**
 * Delete method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function delete($id = null) {
		$context = $this->Contexts->get($id);
		$this->request->allowMethod(['post', 'delete']);
		if ($this->Contexts->delete($context)) {
			$this->Flash->success('The context has been deleted.');
		} else {
			$this->Flash->error('The context could not be deleted. Please, try again.');
		}
		return $this->redirect(['action' => 'index']);
	}
}
