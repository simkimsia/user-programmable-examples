<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Log\Log;
use Hoa\Ruler\Context;
use Hoa\Ruler\Ruler;

/**
 * RulesApplyOnContexts Model
 */
class RulesApplyOnContextsTable extends Table {

/**
 * Initialize method
 *
 * @param array $config The configuration for the Table.
 * @return void
 */
	public function initialize(array $config) {
		$this->table('rules_apply_on_contexts');
		$this->displayField('id');
		$this->primaryKey('id');

		$this->belongsTo('Rules', [
			'foreignKey' => 'rule_id',
		]);
		$this->belongsTo('Contexts', [
			'foreignKey' => 'context_id',
		]);
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
			->add('rule_id', 'valid', ['rule' => 'numeric'])
			->allowEmpty('rule_id')
			->add('context_id', 'valid', ['rule' => 'numeric'])
			->allowEmpty('context_id')
			->add('pass', 'valid', ['rule' => 'boolean'])
			->allowEmpty('pass');

		return $validator;
	}

	public function apply($ruleEntity, $contextEntity) {		
		$ruler = new Ruler();

		// 1. Write a rule.
		$rule  = $ruleEntity->rule;

		// 2. Create a context.
		$context           = new Context();
		foreach($contextEntity->toArray() as $key => $value) {
			Log::write('error', $key);
			Log::write('error', $value);
		    $context[$key] = $value;
		}

		Log::write('error', $context);

		// 3. Assert!
		$assert = $ruler->assert($rule, $context);
		$data = [
			'rule_id' => $ruleEntity->id, 
			'context_id' => $contextEntity->id
		];

		$existingRecord = $this->find('all')
			->where($data)
			->first();

		$data['pass'] = $assert;

		if (empty($existingRecord->id)) {
			$record = $this->newEntity($data);
		} else {
			$record = $this->patchEntity($existingRecord, $data);
		}
		return $this->save($record);
	}

}
