<?php
App::uses('AppModel', 'Model');
/**
 * Imagesvehicle Model
 *
 * @property Vehicle $Vehicle
 */
class Imagesvehicle extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'image_file' =>array(
			'rule' => array('fileExtension', array('jpg,png,jpeg'),false),
			'message'     => 'Vous ne pouvez envoyer que des jpg ou des png. ',
			'allowEmpty'	  => true
			
		),
		'vehicle_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
public function fileExtension($check,$extensions,$allowEmpty = true)
	{
		$file= current($check);
		if (empty($file['tmp_name'])) {
			return true;
		}
		else{
		$extension = strtolower(pathinfo($file['name'],PATHINFO_EXTENSION));
		return in_array($extension, array('jpg','jpeg','png','gif'));	
		}
	}

	/**
	 * beforeDelete callback
	 *
	 * @param $cascade boolean
	 * @return boolean
	 */
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
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Vehicle' => array(
			'className' => 'Vehicle',
			'foreignKey' => 'vehicle_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
