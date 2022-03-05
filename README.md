# userApp
このアプリケーションは、ユーザー登録することにより使用できます。

# Description
まずユーザー登録、またはログインします。
その後、ユーザー情報を閲覧・編集が可能になります。

# Installation
②ローカルリポジトリを作成し、クローンする。
任意のローカルリポジトリを作成し、下記コマンドを実行
$git clone https://github.com/masanob0213/Connect.inc.git.

③.envファイルを作成
・ローカルリポジトリに移動
$cd ローカルリポジトリ
・DockerPracticeディレクトリに移動
$ cd DockerPractice
・appコンテナに入る。
$ winpty docker-compose exec app bash
・プロジェクトに移動
$cd userapp
env.sampleから.envを作成
$ cp .env.sample .env

④.envファイルの編集
・上記で作成した.envファイルの11行目以降を下記に編集。
DB_CONNECTION=mysql
DB_HOST=laravel_db
DB_PORT=3306
DB_DATABASE=laravel_db
DB_USERNAME=laravel_user
DB_PASSWORD=laravel_pass

③マイグレーションの実行
・上記で作成したリモートリポジトリに移動
$ cd リモートリポジトリ
・appコンテナに入る。
$ winpty docker-compose exec app bash
・laravelプロジェクトに移動
$ cd userapp/
・マイグレーション実行
$ php artisan migrate

④コンテナの立ち上げ
・上記で作成したリモートリポジトリに移動
$ cd リモートリポジトリ
・イメージ作成
$ docker-compose build
・コンテナを起動
$ docker-compose up -d

⑤動作確認
http://localhost/
にアクセスし、ログイン画面が表示されること

# Requirement
Laravel 8.83.3
Docker Desktop 4.5.1
MySQL 5.7.37
PHPMyAdmin：5

# Author
* M.Ohmori
* okd_ohmori@outlook.com

# License
https://choosealicense.com/no-permission/

# DEMO
"hoge"の魅力が直感的に伝えわるデモ動画や図解を載せる
 
# Features
"hoge"のセールスポイントや差別化などを説明する

# Usage
 DEMOの実行方法など、"hoge"の基本的な使い方を説明する
  
# Note
注意点などがあれば書く
