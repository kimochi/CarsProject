<?php
App::uses('AppController', 'Controller');
/**
 * Modeles Controller
 *
 * @property Modele $Modele
 * @property PaginatorComponent $Paginator
 */
class ModelesController extends AppController {

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
		$this->Modele->recursive = 0;
		$this->set('modeles', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Modele->exists($id)) {
			throw new NotFoundException(__('Invalid modele'));
		}
		$options = array('conditions' => array('Modele.' . $this->Modele->primaryKey => $id));
		$this->set('modele', $this->Modele->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Modele->create();
			if ($this->Modele->save($this->request->data)) {
				$this->Session->setFlash(__('The modele has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The modele could not be saved. Please, try again.'));
			}
		}
		$marks = $this->Modele->Mark->find('list');
		$this->set(compact('marks'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Modele->exists($id)) {
			throw new NotFoundException(__('Invalid modele'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Modele->save($this->request->data)) {
				$this->Session->setFlash(__('The modele has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The modele could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Modele.' . $this->Modele->primaryKey => $id));
			$this->request->data = $this->Modele->find('first', $options);
		}
		$marks = $this->Modele->Mark->find('list');
		$this->set(compact('marks'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Modele->id = $id;
		if (!$this->Modele->exists()) {
			throw new NotFoundException(__('Invalid modele'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Modele->delete()) {
			$this->Session->setFlash(__('The modele has been deleted.'));
		} else {
			$this->Session->setFlash(__('The modele could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
