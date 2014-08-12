<?php
App::uses('AppController', 'Controller');
/**
 * Vehicles Controller
 *
 * @property Vehicle $Vehicle
 * @property PaginatorComponent $Paginator
 */
class VehiclesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */

	public function index() {
		$this->Vehicle->validate=array();//use no validation 
		$this->Vehicle->recursive = 0;
		$vehicles = $this->Paginator->paginate();
		$marks = $this->Vehicle->Mark->find('list');//send marks
		//$images = $this->Vehicle->Imagesvehicle->find('list');//send images
		$this->set(compact('marks','vehicles'));
		$this->set('images',($this->Vehicle->Imagesvehicle->find('all')));


}
public function showModele(){
	if ($this->request->is('ajax')) {
			$result = $this->Vehicle->Modele->find('list',
				array('conditions'=>
						array('mark_id'=>$this->request->query['id'])
				)
			);
			$ret='';
			if ($result) {
					$ret.= '<option value=""> Selectionnez le modéle</option>';
				foreach ($result as $key => $value) {
					$ret .='<option value="'.$key.'">' .$value . '</option>';
				}
			}
			else{
				$ret='<option value="0">Vide...</option>';
			}
			echo json_encode($ret);
			exit();
		}
}

	public function search(){	
		$this->Vehicle->validate=array();
		$marks= $this->Vehicle->Mark->find('list');
		$this->set(compact('marks'));

		if ($this->request->is('post')) {
			//au cas de la recherche de la page index faire la recherche et puis rediriger vers la vue search
			$d = ($this->request->data);
			//debug($d);
			//exit();
			$mrk = $d['vehicles']['mark_id'];
			$mdl = $d['vehicles']['modele_id'];
			$yr = $d['vehicles']['year']['year'];
			$fuel= $d['vehicles']['fuel'];
			$price = explode(';',$d['price']);
			$km = explode(';', $d['km']);
			if ($mrk == null) {
				if ($mdl == null) {
					if ($yr == null) {
						if ($fuel == null) {
							$this->Paginator->settings= array(
							'conditions' => array(
											'OR'=> array(
											'Vehicle.price BETWEEN '.$price[0].' AND '.$price[1],
											'Vehicle.mileage BETWEEN '.$km[0].' AND '.$km[1],
														)
												),
							'limit' => 10
							);
						}
						else{
							$this->Paginator->settings= array(
							'conditions' => array(
										'OR'=> array(
											'Vehicle.price BETWEEN '.$price[0].' AND '.$price[1],
											'Vehicle.mileage BETWEEN '.$km[0].' AND '.$km[1],
														),
										'AND' => array(
											'Vehicle.fuel ' => $fuel
											)
											),
							'limit' => 10
							);
						}
					}
					else{
						if ($fuel == null) {
							$this->Paginator->settings= array(
							'conditions' => array(
										'OR'=> array(
											'Vehicle.price BETWEEN '.$price[0].' AND '.$price[1],
											'Vehicle.mileage BETWEEN '.$km[0].' AND '.$km[1],
														),
										'AND' => array(
											'Vehicle.year ' => $yr
											)
											),
							'limit' => 10
							);
						}
						else{

						$this->Paginator->settings= array(
							'conditions' => array(
										'OR'=> array(
											'Vehicle.price BETWEEN '.$price[0].' AND '.$price[1],
											'Vehicle.mileage BETWEEN '.$km[0].' AND '.$km[1],
														),
										'AND' => array(
												'Vehicle.year ' => $yr,
												'Vehicle.fuel'  => $fuel
												)
											),
							'limit' => 10
							);
						}
					}
				}
				else{
					//ya3ni la marque n'est pas null
					if ($yr == null) {
						if ($fuel == null) {
							$this->Paginator->settings= array(
							'conditions' => array(
											'OR'=> array(
											'Vehicle.price BETWEEN '.$price[0].' AND '.$price[1],
											'Vehicle.mileage BETWEEN '.$km[0].' AND '.$km[1],
														),
											'AND'=> array(
													'Vehicle.modele_id ' => $mdl
													)
												),
							'limit' => 10
							);
						}
						else{
							$this->Paginator->settings= array(
							'conditions' => array(
										'OR'=> array(
											'Vehicle.price BETWEEN '.$price[0].' AND '.$price[1],
											'Vehicle.mileage BETWEEN '.$km[0].' AND '.$km[1],
														),
										'AND' => array(
											'Vehicle.fuel ' => $fuel,
											'Vehicle.modele_id ' => $mdl
											)
											),
							'limit' => 10
							);
						}
					}
					else{
						if ($fuel == null) {
							$this->Paginator->settings= array(
							'conditions' => array(
										'OR'=> array(
											'Vehicle.price BETWEEN '.$price[0].' AND '.$price[1],
											'Vehicle.mileage BETWEEN '.$km[0].' AND '.$km[1],
														),
										'AND' => array(
											'Vehicle.year ' => $yr,
											'Vehicle.modele_id ' => $mdl
											)
											),
							'limit' => 10
							);
						}
						else{

						$this->Paginator->settings= array(
							'conditions' => array(
										'OR'=> array(
											'Vehicle.price BETWEEN '.$price[0].' AND '.$price[1],
											'Vehicle.mileage BETWEEN '.$km[0].' AND '.$km[1],
														),
										'AND' => array(
												'Vehicle.year ' => $yr,
												'Vehicle.fuel'  => $fuel,
												'Vehicle.modele_id ' => $mdl
												)
											),
							'limit' => 10
							);
						}
					}
				}
			}
			else{
				//ya3ni la marque n'est pas null
				if ($mdl == null) {
					//ila kkan l modéle null
					if ($yr == null) {
						if ($fuel == null) {
							$this->Paginator->settings= array(
							'conditions' => array(
											'OR'=> array(
											'Vehicle.price BETWEEN '.$price[0].' AND '.$price[1],
											'Vehicle.mileage BETWEEN '.$km[0].' AND '.$km[1],
														),
											'AND'=> array(
													'Vehicle.mark_id ' => $mrk
													)
												),
							'limit' => 10
							);
						}
						else{
							$this->Paginator->settings= array(
							'conditions' => array(
										'OR'=> array(
											'Vehicle.price BETWEEN '.$price[0].' AND '.$price[1],
											'Vehicle.mileage BETWEEN '.$km[0].' AND '.$km[1],
														),
										'AND' => array(
											'Vehicle.fuel ' => $fuel,
											'Vehicle.mark_id ' => $mrk
											)
											),
							'limit' => 10
							);
						}
					}
					else{
						if ($fuel == null) {
							$this->Paginator->settings= array(
							'conditions' => array(
										'OR'=> array(
											'Vehicle.price BETWEEN '.$price[0].' AND '.$price[1],
											'Vehicle.mileage BETWEEN '.$km[0].' AND '.$km[1],
														),
										'AND' => array(
											'Vehicle.year ' => $yr,
											'Vehicle.mark_id ' => $mrk
											)
											),
							'limit' => 10
							);
						}
						else{

						$this->Paginator->settings= array(
							'conditions' => array(
										'OR'=> array(
											'Vehicle.price BETWEEN '.$price[0].' AND '.$price[1],
											'Vehicle.mileage BETWEEN '.$km[0].' AND '.$km[1],
														),
										'AND' => array(
												'Vehicle.year ' => $yr,
												'Vehicle.fuel'  => $fuel,
												'Vehicle.mark_id ' => $mrk
												)
											),
							'limit' => 10
							);
						}
					}
				}
				else{
					//ila makanch l modéle null
					if ($yr == null) {
						if ($fuel == null) {
							$this->Paginator->settings= array(
							'conditions' => array(
											'OR'=> array(
											'Vehicle.price BETWEEN '.$price[0].' AND '.$price[1],
											'Vehicle.mileage BETWEEN '.$km[0].' AND '.$km[1],
														),
											'AND'=> array(
													'Vehicle.modele_id ' => $mdl
													)
												),
							'limit' => 10
							);
						}
						else{
							$this->Paginator->settings= array(
							'conditions' => array(
										'OR'=> array(
											'Vehicle.price BETWEEN '.$price[0].' AND '.$price[1],
											'Vehicle.mileage BETWEEN '.$km[0].' AND '.$km[1],
														),
										'AND' => array(
											'Vehicle.fuel ' => $fuel,
											'Vehicle.modele_id ' => $mdl
											)
											),
							'limit' => 10
							);
						}
					}
					else{
						if ($fuel == null) {
							$this->Paginator->settings= array(
							'conditions' => array(
										'OR'=> array(
											'Vehicle.price BETWEEN '.$price[0].' AND '.$price[1],
											'Vehicle.mileage BETWEEN '.$km[0].' AND '.$km[1],
														),
										'AND' => array(
											'Vehicle.year ' => $yr,
											'Vehicle.modele_id ' => $mdl
											)
											),
							'limit' => 10
							);
						}
						else{

						$this->Paginator->settings= array(
							'conditions' => array(
										'OR'=> array(
											'Vehicle.price BETWEEN '.$price[0].' AND '.$price[1],
											'Vehicle.mileage BETWEEN '.$km[0].' AND '.$km[1],
														),
										'AND' => array(
												'Vehicle.year ' => $yr,
												'Vehicle.fuel'  => $fuel,
												'Vehicle.modele_id ' => $mdl
												)
											),
							'limit' => 10
							);
						}
					}
				}
			}
			$vehicl = $this->Paginator->paginate('Vehicle');
			$this->set(compact('vehicl'));
		}
		else{
			//$this->set('vehicl',$this->Paginator->paginate());
			$this->recursive = 0 ;
			$vehicl = $this->Paginator->paginate('Vehicle');
			$this->set(compact('vehicl'));
		}
			$this->set('images',($this->Vehicle->Imagesvehicle->find('all')));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {

		if (!$this->Vehicle->exists($id)) {
			throw new NotFoundException(__('Invalid vehicle'));
		}
		
		$this->set('images',($this->Vehicle->Imagesvehicle->find('all')));
		$options = array('conditions' => array('Vehicle.' . $this->Vehicle->primaryKey => $id));
		$this->set('vehicle', $this->Vehicle->find('first', $options));
		//debug($this->Vehicle->find('first', $options)['Mark']['id']);

		$this->set( 'others', $this->Vehicle->find('all',array('conditions' => array('Vehicle.mark_id' => $this->Vehicle->find('first', $options)['Mark']['id']))));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			debug($this->request->data);
			/**/
			$img1 = $this->request->data['Vehicle']['image_file'];
			$img2 = $this->request->data['Vehicle']['image_file_2'];
			$img3 = $this->request->data['Vehicle']['image_file_3'];
			$img4 = $this->request->data['Vehicle']['image_file_4'];
			$img5 = $this->request->data['Vehicle']['image_file_5'];
			$images = array($img1,$img2,$img3,$img4,$img5);
			//debug($images);
			//debug($img1);
			//exit();
			$this->Vehicle->create();
			if ($this->Vehicle->save($this->request->data)) {
				//remplir les images dans la table imagesvehicle
				//int var $i = 1;
				foreach ($images as $img) {
							$file = $img;
						if (isset($file)) {
							$extension = strtolower(pathinfo($file['name'],PATHINFO_EXTENSION));
							if (!empty($file['tmp_name'])) {
								
								//avant l'upload de l'image ajouter a la table
								$this->Vehicle->Imagesvehicle->create();
								$data= array('Imagesvehicle'=>array(
								'vehicle_id'=>$this->Vehicle->id,
								'image_file'=>''
								));
								if ($this->Vehicle->Imagesvehicle->save($data)) {
									$this->Vehicle->Imagesvehicle->saveField('image','car_'.$this->Vehicle->id .'_'.$this->Vehicle->Imagesvehicle->id. '.' . $extension);
									move_uploaded_file($file['tmp_name'], IMAGES .'uploads\vehicules'. DS .'car_'.$this->Vehicle->id .'_'.$this->Vehicle->Imagesvehicle->id. '.' . $extension );
									//tout c'est passé ok 
								}
								else{
									$this->Session->setFlash(__('Erreur lors de l\'ajout des images.'));
								}
							}
						}
						//$i++;
					
					
				}
				
				
				


				//
				//aprés le save sauvegarder l'image
				
				$this->Session->setFlash(__('The vehicle has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vehicle could not be saved. Please, try again.'));
			}
		}
		$marks = $this->Vehicle->Mark->find('list');
		$modeles = $this->Vehicle->Modele->find('list');
		$this->set(compact('marks', 'modeles'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Vehicle->exists($id)) {
			throw new NotFoundException(__('Invalid vehicle'));
		}
		if ($this->request->is(array('post', 'put'))) {
				//debug($this->request->data);
			if ($this->Vehicle->save($this->request->data)) {
				//récupérer l'image envoyé
				$file = $this->request->data['Vehicle']['image_file'];
				//s'il en existe
				if (isset($file)) {
					$extension = strtolower(pathinfo($file['name'],PATHINFO_EXTENSION));//l'extension jdida au cas ou bgha yzid l'image w hya makantch
					
					if (!empty($file['tmp_name'])) {
						$oldextension = strtolower(pathinfo($this->Vehicle->field['image'], PATHINFO_EXTENSION)); //extension l9dima au cas ou bgha ymodifi l'image ila déja kayna 
						$oldfile = IMAGES  . 'uploads\vehicules' . DS. $this->Vehicle->field['image'];//nchdo l'image (objét)
						if (file_exists($oldfile)) {
							//supprimer si une existe déja
							unlink($oldfile);
						}
						//et aprés enregistrer l'image
					move_uploaded_file($file['tmp_name'], IMAGES .'uploads\vehicules'. DS .'Mrk' .$this->Vehicle->id .'Mdl'.$this->Vehicle->id . '.' . $extension );
					//enregistrer le nom de l'image dans la base de données
					$this->Vehicle->saveField('image','Mrk' .$this->Vehicle->id .'Mdl'.$this->Vehicle->id . '.' . $extension);
					}
				}
				$this->Session->setFlash(__('The vehicle has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vehicle could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Vehicle.' . $this->Vehicle->primaryKey => $id));
			$this->request->data = $this->Vehicle->find('first', $options);
		}
		$marks = $this->Vehicle->Mark->find('list');
		$modeles = $this->Vehicle->Modele->find('list');
		$this->set(compact('marks', 'modeles'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Vehicle->id = $id;
		if (!$this->Vehicle->exists()) {
			throw new NotFoundException(__('Invalid vehicle'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Vehicle->delete()) {
			$this->Session->setFlash(__('The vehicle has been deleted.'));
		} else {
			$this->Session->setFlash(__('The vehicle could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
