cakephp3-sample
===============

cakephp3のサンプルを書いてみる

### データベースの準備
```
mysql -u root -e "create database my_app default charset utf8"
mysql -u root -e "create database test_my_app default charset utf8"
mysql -u root -e "GRANT ALL PRIVILEGES ON *.* TO 'my_app'@'localhost' IDENTIFIED BY 'secret' WITH GRANT OPTION;"
```

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

### nginx設定
```
server {
    listen       80;
    server_name  dev.example.com
                 192.168.33.10
                 ;

    access_log  /var/log/nginx/dev.example.com/access.log  main;
    error_log   /var/log/nginx/dev.example.com/error.log;

    root   /vagrant/htdocs/app/webroot;

    index  index.php;

    location / {
        try_files $uri $uri/ /index.php?$uri&$args;
    }

    location ~ \.php$ {
        try_files $uri =404;
        fastcgi_pass   127.0.0.1:9000;
        fastcgi_index  index.php;
        fastcgi_param  SCRIPT_FILENAME  $document_root$fastcgi_script_name;
        include        fastcgi_params;
    }

    location ~ (\.htaccess|\.git|\.svn) {
        deny  all;
    }

    charset utf-8;

}
```

