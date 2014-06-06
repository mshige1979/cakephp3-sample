cakephp3-sample
===============

cakephp3のサンプルを書いてみる

### インストール
```
curl -s https://getcomposer.org/installer | php
```

### composer.jsonを編集
```
cat <<'_EOT_' > composer.json
{
  "require" : {
    "cakephp/cakephp" : "3.0.x-dev",
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

