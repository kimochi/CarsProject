<?php
App::uses('AppModel', 'Model');
/**
 * Mark Model
 *
 * @property Modele $Modele
 * @property Vehicle $Vehicle
 */
class Contact extends AppModel {

	public $useTable = false;

	/**
	 * validation rules
	 *
	 * @var array
	 */
		public $validate  = array(
			'name' => array(
				'notEmpty'   => array(
					'rule'    => array('notEmpty'),
					'message' => 'Validation Error Message',
					//'allowEmpty' => false,
					//'required'   => false,
					//'last'       => false, // Stop validation after this rule
					//'on'         => 'create' // Limit validation to 'create' or 'update' operations
				),
			),
			'mail' => array(
				'notEmpty'   => array(
					'rule'    => array('email'),
					'message' => 'Validation Error Message',
					//'allowEmpty' => false,
					//'required'   => false,
					//'last'       => false, // Stop validation after this rule
					//'on'         => 'create' // Limit validation to 'create' or 'update' operations
				),
			),
			'subject' => array(
				'notEmpty'   => array(
					'rule'    => array('notEmpty'),
					'message' => 'Validation Error Message',
					//'allowEmpty' => false,
					//'required'   => false,
					//'last'       => false, // Stop validation after this rule
					//'on'         => 'create' // Limit validation to 'create' or 'update' operations
				),
			),
			'message' => array(
				'notEmpty'   => array(
					'rule'    => array('notEmpty'),
					'message' => 'Validation Error Message',
					//'allowEmpty' => false,
					//'required'   => false,
					//'last'       => false, // Stop validation after this rule
					//'on'         => 'create' // Limit validation to 'create' or 'update' operations
				),
			)

		);
	public function send($d){
		//debug($d);
		App::uses('CakeEmail','Network/Email');
		$mail = new CakeEmail();
		$mail->to("tahirekamal@gmail.com")
		->from($d['email'])
		->subject('Contact :: Site')
		->emailFormat('html')
		->template('contact')->viewVars(array($d))
		;
		return $mail->send();
	}	
	
}


?>
