<?php
namespace App\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use App\Model\Table\ContextsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContextsTable Test Case
 */
class ContextsTableTest extends TestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = [
		'app.contexts'
	];

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$config = TableRegistry::exists('Contexts') ? [] : ['className' => 'App\Model\Table\ContextsTable'];
		$this->Contexts = TableRegistry::get('Contexts', $config);
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Contexts);

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
