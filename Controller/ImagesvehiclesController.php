<?php
App::uses('AppController', 'Controller');
/**
 * Imagesvehicles Controller
 *
 * @property Imagesvehicle $Imagesvehicle
 * @property PaginatorComponent $Paginator
 */
class ImagesvehiclesController extends AppController {

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
		$this->Imagesvehicle->recursive = 0;
		$this->set('imagesvehicles', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Imagesvehicle->exists($id)) {
			throw new NotFoundException(__('Invalid imagesvehicle'));
		}
		$options = array('conditions' => array('Imagesvehicle.' . $this->Imagesvehicle->primaryKey => $id));
		$this->set('imagesvehicle', $this->Imagesvehicle->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		debug($this->request->data);
		exit();
		if ($this->request->is('post')) {
			$this->Imagesvehicle->create();
			if ($this->Imagesvehicle->save($this->request->data)) {

				//aprés le save sauvegarder l'image
				$file = $this->request->data['Imagesvehicle']['image_file'];
				if (isset($file)) {
					$extension = strtolower(pathinfo($file['name'],PATHINFO_EXTENSION));
					if (!empty($file['tmp_name'])) {
					move_uploaded_file($file['tmp_name'], IMAGES .'uploads\vehicules'. DS .$this->Imagesvehicle->id .'_'.$this->Vehicle->id . '.' . $extension );
					$this->Imagesvehicle->saveField('image',$this->Imagesvehicle->id .'_'.$this->Vehicle->id . '.' . $extension);
					}
				}
				$this->Session->setFlash(__('The imagesvehicle has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The imagesvehicle could not be saved. Please, try again.'));
			}
		}
		$vehicles = $this->Imagesvehicle->Vehicle->find('list');
		$this->set(compact('vehicles'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Imagesvehicle->exists($id)) {
			throw new NotFoundException(__('Invalid imagesvehicle'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Imagesvehicle->save($this->request->data)) {
				$this->Session->setFlash(__('The imagesvehicle has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The imagesvehicle could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Imagesvehicle.' . $this->Imagesvehicle->primaryKey => $id));
			$this->request->data = $this->Imagesvehicle->find('first', $options);
		}
		$vehicles = $this->Imagesvehicle->Vehicle->find('list');
		$this->set(compact('vehicles'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Imagesvehicle->id = $id;
		if (!$this->Imagesvehicle->exists()) {
			throw new NotFoundException(__('Invalid imagesvehicle'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Imagesvehicle->delete()) {
			$this->Session->setFlash(__('The imagesvehicle has been deleted.'));
		} else {
			$this->Session->setFlash(__('The imagesvehicle could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
