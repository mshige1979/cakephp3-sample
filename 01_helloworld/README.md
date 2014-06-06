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
#### vim app/App/Controller/PostsController.php

### ビュー

### モデル
