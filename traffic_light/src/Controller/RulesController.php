<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Log\Log;
use Cake\ORM\TableRegistry;

/**
 * Rules Controller
 *
 * @property App\Model\Table\RulesTable $Rules
 */
class RulesController extends AppController {

/**
 * apply rule to context method
 *
 * @return void
 */
	public function apply_to_context($rule_id, $context_id) {
		$ruleEntity = $this->Rules->get($rule_id);

		$contextsTable = TableRegistry::get('Contexts');
		$contextEntity = $contextsTable->get($context_id);

		Log::write('error', $ruleEntity);
		Log::write('error', $contextEntity);

		$rulesApplyOnContextsTable = TableRegistry::get('RulesApplyOnContexts');
		$result = $rulesApplyOnContextsTable->apply($ruleEntity, $contextEntity);
		Log::write('error', $result);		
	}

/**
 * Index method
 *
 * @return void
 */
	public function index() {
		$this->set('rules', $this->paginate($this->Rules));
	}

/**
 * View method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function view($id = null) {
		$rule = $this->Rules->get($id, [
			'contain' => []
		]);
		$this->set('rule', $rule);
	}

/**
 * Add method
 *
 * @return void
 */
	public function add() {
		$rule = $this->Rules->newEntity($this->request->data);
		if ($this->request->is('post')) {
			if ($this->Rules->save($rule)) {
				$this->Flash->success('The rule has been saved.');
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('The rule could not be saved. Please, try again.');
			}
		}
		$this->set(compact('rule'));
	}

/**
 * Edit method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function edit($id = null) {
		$rule = $this->Rules->get($id, [
			'contain' => []
		]);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$rule = $this->Rules->patchEntity($rule, $this->request->data);
			if ($this->Rules->save($rule)) {
				$this->Flash->success('The rule has been saved.');
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('The rule could not be saved. Please, try again.');
			}
		}
		$this->set(compact('rule'));
	}

/**
 * Delete method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function delete($id = null) {
		$rule = $this->Rules->get($id);
		$this->request->allowMethod(['post', 'delete']);
		if ($this->Rules->delete($rule)) {
			$this->Flash->success('The rule has been deleted.');
		} else {
			$this->Flash->error('The rule could not be deleted. Please, try again.');
		}
		return $this->redirect(['action' => 'index']);
	}
}
