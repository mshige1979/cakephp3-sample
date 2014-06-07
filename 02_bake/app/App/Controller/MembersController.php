<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Members Controller
 *
 * @property App\Model\Table\MembersTable $Members
 */
class MembersController extends AppController {

/**
 * 追加
 */
	public $components = array('Session');

/**
 * Index method
 *
 * @return void
 */
	public function index() {
		$this->set('members', $this->paginate($this->Members));
	}

/**
 * View method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$member = $this->Members->get($id, [
			'contain' => []
		]);
		$this->set('member', $member);
	}

/**
 * Add method
 *
 * @return void
 */
	public function add() {
		$member = $this->Members->newEntity($this->request->data);
		if ($this->request->is('post')) {
			if ($this->Members->save($member)) {
				$this->Session->setFlash(__('The member has been saved.'));
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Session->setFlash(__('The member could not be saved. Please, try again.'));
			}
		}
		$this->set(compact('member'));
	}

/**
 * Edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$member = $this->Members->get($id, [
			'contain' => []
		]);
		if ($this->request->is(['post', 'put'])) {
			$member = $this->Members->patchEntity($member, $this->request->data);
			if ($this->Members->save($member)) {
				$this->Session->setFlash(__('The member has been saved.'));
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Session->setFlash(__('The member could not be saved. Please, try again.'));
			}
		}
		$this->set(compact('member'));
	}

/**
 * Delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$member = $this->Members->get($id);
		$this->request->allowMethod('post', 'delete');
		if ($this->Members->delete($member)) {
			$this->Session->setFlash(__('The member has been deleted.'));
		} else {
			$this->Session->setFlash(__('The member could not be deleted. Please, try again.'));
		}
		return $this->redirect(['action' => 'index']);
	}
}
