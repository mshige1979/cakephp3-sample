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

※コントローラーの雛形を作成する場合はコンポーネントなどを各自で用意していないので個別に設定が必要な場合は付与する必要があります。（セッションコンポーネントなど）

#### モデルを作成
```
sh app/App/Console/cake bake model Members
```

#### ビューを作成
```
sh app/App/Console/cake bake view Members
```


### 画面
<img src="https://raw.githubusercontent.com/mshige1979/cakephp3-sample/master/02_bake/items/cakephp3_0003-1.png"></img>

<img src="https://raw.githubusercontent.com/mshige1979/cakephp3-sample/master/02_bake/items/cakephp3_0003-2.png"></img>

<img src="https://raw.githubusercontent.com/mshige1979/cakephp3-sample/master/02_bake/items/cakephp3_0003-3.png"></img>

