<?php
App::uses('AppModel', 'Model');
/**
 * Vehicle Model
 *
 * @property Mark $Mark
 * @property Modele $Modele
 */
class Vehicle extends AppModel {


	//use paginate with sql query 
/*	public function paginate($conditions = null,$fields,$order = 'asc',$limit = 10,$page=1,$recursive = null,$extra = array())
	{
		$recursive=-1;
		//important to have
		$this->useTable= false;
		$sql="";
		$sql .= "SELECT * FROM VEHICLES ";
		//adding limit close
		$sql.=(($page -1 ) * $limit) . ', ' .$limit;
		$results = $this->query($sql);

		return $results;
	}
	public function paginateCount($conditions = null, $recursive = 0 , $extra = array())
	{
		$sql = "SELECT * FROM VEHICLES";
		//$sql .= "";
		$this->recursive= $recursive;
		$results = $this->query($sql);
		return count($results);
	}
*
 * Validation rules
 *
 * @var array
 */

	public $validate = array(
		'image_file' =>array(
			'rule' => array('fileExtension', array('jpg,png,jpeg'),false),
			'message'     => 'Vous ne pouvez envoyer que des jpg ou des png. ',
			'allowEmpty'	  => true
			)
		,
		'mark_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

		'nbr_portes' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'date_mise_en_circulation' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'Fuel' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'year' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		)
		,
		'modele_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'power' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'price' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'mileage' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'consumption' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'extcolor' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'intcolor' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		/*'image' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/
		'description' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'sold' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'sold_date' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'year' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		)
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
	 * afterSave callback
	 *
	 * @param $created boolean
	 * @param $options array
	 * @return void
	 *//*
		public function afterSave($created) {
			if (isset($this->data[$this->alias['image_file']])) {
				$file = $this->data[$this->alias['image_file']];
				$extension = strtolower(pathinfo($file['name'],PATHINFO_EXTENSION));
				if (!empty($file['tmp_name'])) {
					move_uploaded_file($file['tmp_name'], IMAGES .'uploads'.'vehicules'. DS .'Mrk' .$this->mark_id .'Mdl'.$this->modele_id . '.' . $extension );
					$this->saveField('image','Mrk' .$this->mark_id .'Mdl'.$this->modele_id . '.' . $extension);
				}
			}
		}*/
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
		'Mark' => array(
			'className' => 'Mark',
			'foreignKey' => 'mark_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Modele' => array(
			'className' => 'Modele',
			'foreignKey' => 'modele_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	public $hasMany = array(
		'Imagesvehicle' => array(
			'className' => 'Imagesvehicle',
			'foreignKey' => 'vehicle_id',
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
