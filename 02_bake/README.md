### bake
bakeコマンドを使用してサンプルのコントローラー、ビュー、モデルを作成<br />
英語がダメな時点で「ばけ」と読んでいたのはいい思い出ｗ

### データベース
#### テーブル用意
```
CREATE TABLE members (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    age INT,
	tel VARCHAR(15),
    created DATETIME DEFAULT CURRENT_TIMESTAMP,
    modified DATETIME DEFAULT NULL
);
```

### bake
#### コントローラーを作成
```
sh app/App/Console/cake bake controller Members
```

とすると

```

Welcome to CakePHP v3.0.0-dev3 Console
---------------------------------------------------------------
App : App
Path: /vagrant/projects/cakephp3-sample/02_bake/app/App/
---------------------------------------------------------------

Baking controller class for Members...

Creating file /vagrant/projects/cakephp3-sample/02_bake/app/App/Controller/MembersController.php
Wrote `/vagrant/projects/cakephp3-sample/02_bake/app/App/Controller/MembersController.php`
Bake is detecting possible fixtures...

Baking test case for App\Controller\MembersController ...

Creating file /vagrant/projects/cakephp3-sample/02_bake/app/Test/TestCase/Controller/MembersControllerTest.php
Wrote `/vagrant/projects/cakephp3-sample/02_bake/app/Test/TestCase/Controller/MembersControllerTest.php`

```

となる
