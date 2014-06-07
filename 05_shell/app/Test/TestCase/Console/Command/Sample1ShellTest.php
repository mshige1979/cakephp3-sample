<?php
namespace App\Test\TestCase\Console\Command;

use App\Console\Command\Sample1Shell;
use Cake\TestSuite\TestCase;

/**
 * App\Console\Command\Sample1Shell Test Case
 */
class Sample1ShellTest extends TestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->io = $this->getMock('Cake\Console\ConsoleIo');
		$this->Sample1 = new Sample1Shell($this->io);
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Sample1);

		parent::tearDown();
	}

/**
 * testMain method
 *
 * @return void
 */
	public function testMain() {
		$this->markTestIncomplete('testMain not implemented.');
	}

}
