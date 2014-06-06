cakephp3-sample
===============

cakephp3のサンプルを書いてみる

### なんか適当なディレクトリを用意して
```
mkdir projects
cd projects
mkdir sample01
cd sample01
```

### インストール
```
curl -s https://getcomposer.org/installer | php
```

### composer.jsonを編集
```
cat <<'_EOT_' > composer.json
{
  "require" : {
    "cakephp/cakephp" : "3.0.*-dev",
    "cakephp/app" : "dev-master",
    "cakephp/debug_kit": "2.2.*",
    "php": ">=5.4"
  },
  "require-dev": {
    "phpunit/phpunit": "3.7.*"
  },
  "autoload": {
    "psr-0": {
      "App\\": ".",
      "": "./Plugin"
    }
  },
  "scripts": {
    "post-install-cmd": "App\\Console\\Installer::postInstall"
  }
}
_EOT_
```

### composerでプロジェクトを作成
```
php composer.phar create-project -s dev cakephp/app app
```
これでもいいかも
```
php composer.phar update
```

### 起動
```

```


