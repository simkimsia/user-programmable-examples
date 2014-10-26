<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Contexts Model
 */
class ContextsTable extends Table {

/**
 * Initialize method
 *
 * @param array $config The configuration for the Table.
 * @return void
 */
	public function initialize(array $config) {
		$this->table('contexts');
		$this->displayField('id');
		$this->primaryKey('id');
	}

/**
 * Default validation rules.
 *
 * @param \Cake\Validation\Validator $validator
 * @return \Cake\Validation\Validator
 */
	public function validationDefault(Validator $validator) {
		$validator
			->add('id', 'valid', ['rule' => 'numeric'])
			->allowEmpty('id', 'create')
			->allowEmpty('lights')
			->add('left_incoming_traffic', 'valid', ['rule' => 'numeric'])
			->allowEmpty('left_incoming_traffic')
			->add('right_incoming_traffic', 'valid', ['rule' => 'numeric'])
			->allowEmpty('right_incoming_traffic');

		return $validator;
	}

}
