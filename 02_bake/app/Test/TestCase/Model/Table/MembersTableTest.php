<?php
namespace App\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use App\Model\Table\MembersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MembersTable Test Case
 */
class MembersTableTest extends TestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$config = TableRegistry::exists('Members') ? [] : ['className' => 'App\Model\Table\MembersTable'];
		$this->Members = TableRegistry::get('Members', $config);
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Members);

		parent::tearDown();
	}

}
