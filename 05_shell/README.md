### shell
shellのコンソールプログラムを作成する場合

### bake
#### コマンド
```
sh app/App/Console/cake bake shell sample1
```
※shellの場合はベースとなるクラス名を指定

#### コマンド例
```
app/App/Console/Command/Sample1Shell.php
app/Test/TestCase/Console/Command/Sample1ShellTest.php
```
※テストが不要な場合は外しても問題ない

### 雛形
```
<?php
namespace App\Console\Command;

use Cake\Console\Shell;

/**
 * Sample1 shell command.
 */
class Sample1Shell extends Shell {

/**
 * main() method.
 *
 * @return bool|int Success or error code.
 */
        public function main() {
                echo "hello world\n";
        }
}
```
これに対していろいろなモデルやコンポーネント？、ユーティリティを組み込みバッチプログラムを実行する


### 実行
### コマンド
```
sh app/App/Console/cake sample1
```
※bakeの場合と同じようにクラス名を指定する

#### 実行
```
Welcome to CakePHP v3.0.0-dev3 Console
---------------------------------------------------------------
App : App
Path: /vagrant/projects/cakephp3-sample/02_bake/app/App/
---------------------------------------------------------------
hello world
```


