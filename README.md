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
※cake/cakeのdownloadに失敗する場合はgit cloneを別途行う

### サーバ起動
```
sh app/App/Console/cake server -H 192.168.33.10 -p 1234
```


