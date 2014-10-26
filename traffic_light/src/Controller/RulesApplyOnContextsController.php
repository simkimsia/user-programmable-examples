<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RulesApplyOnContexts Controller
 *
 * @property App\Model\Table\RulesApplyOnContextsTable $RulesApplyOnContexts
 */
class RulesApplyOnContextsController extends AppController {

/**
 * Index method
 *
 * @return void
 */
	public function index() {
		$this->paginate = [
			'contain' => ['Rules', 'Contexts']
		];
		$this->set('rulesApplyOnContexts', $this->paginate($this->RulesApplyOnContexts));
	}

/**
 * View method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function view($id = null) {
		$rulesApplyOnContext = $this->RulesApplyOnContexts->get($id, [
			'contain' => ['Rules', 'Contexts']
		]);
		$this->set('rulesApplyOnContext', $rulesApplyOnContext);
	}

/**
 * Add method
 *
 * @return void
 */
	public function add() {
		$rulesApplyOnContext = $this->RulesApplyOnContexts->newEntity($this->request->data);
		if ($this->request->is('post')) {
			if ($this->RulesApplyOnContexts->save($rulesApplyOnContext)) {
				$this->Flash->success('The rules apply on context has been saved.');
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('The rules apply on context could not be saved. Please, try again.');
			}
		}
		$rules = $this->RulesApplyOnContexts->Rules->find('list');
		$contexts = $this->RulesApplyOnContexts->Contexts->find('list');
		$this->set(compact('rulesApplyOnContext', 'rules', 'contexts'));
	}

/**
 * Edit method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function edit($id = null) {
		$rulesApplyOnContext = $this->RulesApplyOnContexts->get($id, [
			'contain' => []
		]);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$rulesApplyOnContext = $this->RulesApplyOnContexts->patchEntity($rulesApplyOnContext, $this->request->data);
			if ($this->RulesApplyOnContexts->save($rulesApplyOnContext)) {
				$this->Flash->success('The rules apply on context has been saved.');
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('The rules apply on context could not be saved. Please, try again.');
			}
		}
		$rules = $this->RulesApplyOnContexts->Rules->find('list');
		$contexts = $this->RulesApplyOnContexts->Contexts->find('list');
		$this->set(compact('rulesApplyOnContext', 'rules', 'contexts'));
	}

/**
 * Delete method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function delete($id = null) {
		$rulesApplyOnContext = $this->RulesApplyOnContexts->get($id);
		$this->request->allowMethod(['post', 'delete']);
		if ($this->RulesApplyOnContexts->delete($rulesApplyOnContext)) {
			$this->Flash->success('The rules apply on context has been deleted.');
		} else {
			$this->Flash->error('The rules apply on context could not be deleted. Please, try again.');
		}
		return $this->redirect(['action' => 'index']);
	}
}
