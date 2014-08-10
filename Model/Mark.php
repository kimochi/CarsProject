<?php
App::uses('AppModel', 'Model');
/**
 * Mark Model
 *
 * @property Modele $Modele
 * @property Vehicle $Vehicle
 */
class Mark extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'image_file' => array(
			'rule'   => array('fileExtension', array('png','jpg','jpeg','gif')),
			'message'     => 'Vous ne pouvez envoyer que des jpg, des png ou des Gif. '
		)
	);

public function fileExtension($check,$allowEmpty = true)
	{
		$file= current($check);
		$extension = strtolower(pathinfo($file['name'],PATHINFO_EXTENSION));
		return in_array($extension, array('jpg','jpeg','png','gif'));
	}
	
	public function beforeDelete($cascade = true) {
			$oldextension = strtolower(pathinfo($this->field['image'], PATHINFO_EXTENSION)); //extension l9dima au cas ou bgha ymodifi l'image ila déja kayna 
			$oldfile = IMAGES  . 'uploads\vehicules' . DS. $this->field['image'];//nchdo l'image (objét)
			if (file_exists($oldfile)) {
				//supprimer si une existe déja
				unlink($oldfile);
			}
		}

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Modele' => array(
			'className' => 'Modele',
			'foreignKey' => 'mark_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Vehicle' => array(
			'className' => 'Vehicle',
			'foreignKey' => 'mark_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
