<?php
App::uses('Imagesvehicle', 'Model');

/**
 * Imagesvehicle Test Case
 *
 */
class ImagesvehicleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.imagesvehicle',
		'app.vehicle',
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
		$this->Imagesvehicle = ClassRegistry::init('Imagesvehicle');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Imagesvehicle);

		parent::tearDown();
	}

}
