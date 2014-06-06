### 基本
コントローラー、ビュー、モデルを使用して簡単なサンプルを作成

### データベース準備
#### データベースを選択
```
use my_app;
```

#### テーブルを作成
```
CREATE TABLE posts (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(50),
    body TEXT,
    created DATETIME DEFAULT CURRENT_TIMESTAMP,
    modified DATETIME DEFAULT NULL
);
```

#### データを投入
```
truncate table posts;
INSERT INTO posts (title,body) VALUES ('タイトル１', 'テスト記事１');
INSERT INTO posts (title,body) VALUES ('タイトル２', 'テスト記事２');
INSERT INTO posts (title,body) VALUES ('タイトル３', 'テスト記事３');
```

### コントローラー
#### app/App/Controller/PostsController.php
```
<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use App\Model\Entity;

class PostsController extends AppController {

	// ヘルパー追加
	public $helpers = array(
		'Html'		// HTMLヘルパー追加
		, 'Form'	// Formヘルパー追加
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
```

### ビュー

### モデル
