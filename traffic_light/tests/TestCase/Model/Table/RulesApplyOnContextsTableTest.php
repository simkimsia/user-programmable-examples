<?php
namespace App\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use App\Model\Table\RulesApplyOnContextsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RulesApplyOnContextsTable Test Case
 */
class RulesApplyOnContextsTableTest extends TestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = [
		'app.rules_apply_on_contexts',
		'app.rules',
		'app.contexts'
	];

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$config = TableRegistry::exists('RulesApplyOnContexts') ? [] : ['className' => 'App\Model\Table\RulesApplyOnContextsTable'];
		$this->RulesApplyOnContexts = TableRegistry::get('RulesApplyOnContexts', $config);
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RulesApplyOnContexts);

		parent::tearDown();
	}

/**
 * Test initialize method
 *
 * @return void
 */
	public function testInitialize() {
		$this->markTestIncomplete('Not implemented yet.');
	}

/**
 * Test validationDefault method
 *
 * @return void
 */
	public function testValidationDefault() {
		$this->markTestIncomplete('Not implemented yet.');
	}

}
