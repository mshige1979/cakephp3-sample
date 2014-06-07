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

#### モデルを作成
```
sh app/App/Console/cake bake model Members
```

#### ビューを作成
```
sh app/App/Console/cake bake view Members
```



