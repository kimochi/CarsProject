<?php
App::uses('Mark', 'Model');

/**
 * Mark Test Case
 *
 */
class MarkTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mark',
		'app.modele'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Mark = ClassRegistry::init('Mark');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Mark);

		parent::tearDown();
	}

}
