<?php
App::uses('AppController', 'Controller');
/**
 * Marks Controller
 *
 * @property Mark $Mark
 * @property PaginatorComponent $Paginator
 */
class MarksController extends AppController {

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
		$this->Mark->recursive = 0;
		$this->set('marks', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Mark->exists($id)) {
			throw new NotFoundException(__('Invalid mark'));
		}
		$options = array('conditions' => array('Mark.' . $this->Mark->primaryKey => $id));
		$this->set('mark', $this->Mark->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Mark->create();
			if ($this->Mark->save($this->request->data)) {
				//aprés le save sauvegarder l'image
				$file = $this->request->data['Mark']['image_file'];
				if (isset($file)) {
					$extension = strtolower(pathinfo($file['name'],PATHINFO_EXTENSION));
					if (!empty($file['tmp_name'])) {
					move_uploaded_file($file['tmp_name'], IMAGES .'uploads\marks'. DS .'Mrk' .$this->Mark->id .'.' . $extension );
					$this->Mark->saveField('image','Mrk' .$this->Mark->id . '.' . $extension);
					}
				}
				$this->Session->setFlash(__('The mark has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mark could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Mark->exists($id)) {
			throw new NotFoundException(__('Invalid mark'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Mark->save($this->request->data)) {
				//récupérer l'image envoyé
				$file = $this->request->data['Mark']['image_file'];
				//s'il en existe
				if (isset($file)) {
					$extension = strtolower(pathinfo($file['name'],PATHINFO_EXTENSION));//l'extension jdida au cas ou bgha yzid l'image w hya makantch
					
					if (!empty($file['tmp_name'])) {
						$oldextension = strtolower(pathinfo($this->Mark->field['image'], PATHINFO_EXTENSION)); //extension l9dima au cas ou bgha ymodifi l'image ila déja kayna 
						$oldfile = IMAGES  . 'uploads\marks' . DS.'Mrk' . $this->Mark->id . '.' . $extension ;//nchdo l'image (objét)
						if (file_exists($oldfile)) {
							//supprimer si une existe déja
							unlink($oldfile);
						}
						//et aprés enregistrer l'image
					move_uploaded_file($file['tmp_name'], IMAGES .'uploads\marks'. DS .'Mrk' .$this->Mark->id .'.' . $extension );
					//enregistrer le nom de l'image dans la base de données
					$this->Mark->saveField('image','Mrk' .$this->Mark->id . '.' . $extension);
					}
				}
				$this->Session->setFlash(__('The mark has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mark could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Mark.' . $this->Mark->primaryKey => $id));
			$this->request->data = $this->Mark->find('first', $options);
		}
}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Mark->id = $id;
		if (!$this->Mark->exists()) {
			throw new NotFoundException(__('Invalid mark'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Mark->delete()) {
			echo IMAGES  . 'uploads\marks' . DS. 'Mrk'.$id .'png';
			if (file_exists(IMAGES  . 'uploads\marks' . DS. 'Mrk'.$id .'.png')) {
				unlink(IMAGES  . 'uploads\marks' . DS. 'Mrk'.$id .'.png');
			}
			if (file_exists(IMAGES  . 'uploads\marks' . DS. 'Mrk'.$id.'_50X50' .'.png')) {
				unlink(IMAGES  . 'uploads\marks' . DS. 'Mrk'.$id.'_50X50' .'.png');
			}
			$this->Mark->Modele->query('DELETE FROM MODELES WHERE mark_id = '.$id);
			$this->Session->setFlash(__('The mark has been deleted.'));
		} else {
			$this->Session->setFlash(__('The mark could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
