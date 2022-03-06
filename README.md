# userApp
このアプリケーションは、ユーザー登録することにより使用できます。

# Description
まずユーザー登録、またはログインします。

その後、ユーザー情報を閲覧・編集が可能になります。

# Installation
①ローカルリポジトリを作成し、クローンする。

任意のローカルリポジトリを作成し、下記コマンドを実行

$git clone https://github.com/masanob0213/Connect.inc.git.


②.envファイルを作成

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


③.envファイルの編集

・上記で作成した.envファイルの11行目あたりを下記に編集。

DB_CONNECTION=mysql

DB_HOST=laravel_db

DB_PORT=3306

DB_DATABASE=laravel_db

DB_USERNAME=laravel_user

DB_PASSWORD=laravel_pass


④マイグレーションの実行

・上記で作成したリモートリポジトリに移動

$ cd リモートリポジトリ

・appコンテナに入る。

$ winpty docker-compose exec app bash

・laravelプロジェクトに移動

$ cd userapp/

・マイグレーション実行

$ php artisan migrate


⑤コンテナの立ち上げ

・上記で作成したリモートリポジトリに移動

$ cd リモートリポジトリ

・DockerPracticeディレクトリに移動

$ cd DockerPractice

・イメージ作成

$ docker-compose build

・コンテナを起動

$ docker-compose up -d


⑥動作確認

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

【初めて利用する方】

名前、電話番号、メールアドレス、パスワードを入力し、会員登録する。

![register](https://user-images.githubusercontent.com/90172942/156907778-2d0714dc-fde6-4565-b388-5a5d5a7f4adf.png)

【会員登録済の方】

メールアドレス、パスワードを入力しログインする。

![login](https://user-images.githubusercontent.com/90172942/156907876-7a2924b8-25e4-4c63-8bfa-f14a9a2065dd.png)

・会員情報の表示

![index](https://user-images.githubusercontent.com/90172942/156907822-ed002b9f-a9df-4bb4-9a8a-de609e1afb5a.png)

・会員情報の変更

![edit](https://user-images.githubusercontent.com/90172942/156907796-3b8f89d9-9699-4dbc-863e-54fc47ae45a5.png)

# Features
"hoge"のセールスポイントや差別化などを説明する

# Usage
 DEMOの実行方法など、"hoge"の基本的な使い方を説明する
  
# Note
注意点などがあれば書く
