<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use App\Model\Entity;

class PostsController extends AppController {

    // ヘルパー追加
    public $helpers = array(
        'Html'      // HTMLヘルパー追加
        , 'Form'    // Formヘルパー追加
    );

    // Session コンポーネントを使うので追加
    public $components = array('Session');


    public function index() {
        $posts = TableRegistry::get('Posts');
        $this->set('posts', $posts->find('all'));
    }

    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $posts = TableRegistry::get('Posts');
        $post = $posts->get($id);
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('post', $post);
    }

    public function add() {

        // リクエストチェック
        if ($this->request->is('post')) {


            $posts = TableRegistry::get('Posts');

            $post = new \App\Model\Entity\Post($this->request->data('Posts'));

            // 値を保存する
            if ($posts->save($post)) {
                // 一時セッションにデータを保存
                $this->Session->setFlash(__('Your post has been updated.'));

                // 一覧画面へリダイレクト
                return $this->redirect(array('action' => 'index'));
            }

            // 保存失敗の場合
            $message = __('Unable to update your post.');
            $this->Session->setFlash($message);

        }
    }

}
