<?php
App::uses('AppController', 'Controller');
/**
 * Imagesvehicles Controller
 *
 * @property Imagesvehicle $Imagesvehicle
 * @property PaginatorComponent $Paginator
 */
class ContactController extends AppController {

	public function index(){
		if ($this->request->is('post')) {
			$this->Contact->send($this->request->data('Contact'));
			$this->Session->setFlash('Vote email nous est bien parvenu');
		}
		else{
//			$this->Session->setFlash("Erreur lors de l'envoie du message";
		}
	}
}
?>