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
/vagrant/htdocs
```

### インストール
```
cd /vagrant/htdocs
curl -s https://getcomposer.org/installer | php
php composer.phar create-project -s dev cakephp/app app
git clone https://github.com/cakephp/cakephp.git -b 3.0 /vagrant/htdocs/app/vendor/cakephp/cakephp
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

