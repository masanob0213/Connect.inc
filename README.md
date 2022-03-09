# UserApp
このアプリケーションは、ユーザー登録することにより使用できます。

# Description
会員登録、ログインします。  
その後、ユーザー情報を閲覧・編集が可能になります。

# Installation
①ローカルリポジトリを作成し、クローンする。  
任意のローカルリポジトリを作成し、下記コマンドを実行  
$git clone https://github.com/masanob0213/Connect.inc.git.

②.envファイルを作成  
・ローカルリポジトリに移動  
```
$cd ローカルリポジトリ  
```
・DockerPracticeディレクトリに移動  
```
$ cd DockerPractice  
```
・appコンテナに入る。  
```
$ winpty docker-compose exec app bash  
```
・プロジェクトに移動  
```
$cd userapp  
```
env.sampleから.envを作成  
```
$ cp .env.sample .env
```
③.envファイルの編集  
・上記で作成した.envファイルの11行目あたりを下記に編集。  
DB_CONNECTION=mysql  
DB_HOST=laravel_db  
DB_PORT=3306  
DB_DATABASE=laravel_db  
DB_USERNAME=laravel_user  
DB_PASSWORD=laravel_pass  
  
・次に19行目あたりを下記に編集  
BROADCAST_DRIVER=log  
CACHE_DRIVER=file  
FILESYSTEM_DRIVER=local  
QUEUE_CONNECTION=sync  
SESSION_DRIVER=database  
SESSION_LIFETIME=120  
  
・次に33行目あたりを下記に編集  
MAIL_MAILER=smtp  
MAIL_HOST=mailcatcher  
MAIL_PORT=1025  
MAIL_USERNAME=null  
MAIL_PASSWORD=null  
MAIL_ENCRYPTION=null  
MAIL_FROM_ADDRESS=mailcatcher@example.com  
MAIL_FROM_NAME="${APP_NAME}"  

④マイグレーションの実行  
・上記で作成したリモートリポジトリに移動  
```
$ cd リモートリポジトリ  
```
・appコンテナに入る。  
```
$ winpty docker-compose exec app bash  
```
・laravelプロジェクトに移動  
```
$ cd userapp/  
```
・マイグレーション実行  
```
$ php artisan migrate  
```
・http://127.0.0.1:8080/
にアクセスし、データベースが作成されていることを確認  

⑤コンテナの立ち上げ  
・上記で作成したリモートリポジトリに移動  
```
$ cd リモートリポジトリ  
```
・DockerPracticeディレクトリに移動  
```
$ cd DockerPractice  
```
・イメージ作成  
```
$ docker-compose build  
```
・コンテナを起動  
```
$ docker-compose up -d  
```
⑥動作確認  
http://localhost/  
上記にアクセスし、ログイン画面が表示されること  
http://localhost:1080/  
上記にアクセスし。MailCatcherが表示されること

# Requirement
Laravel 8.83.3  
Docker Desktop 4.5.1  
PHPMyAdmin：5  
gitbash 2.35

# DEMO
【初めて利用する方】  
名前、電話番号、メールアドレス、パスワードを入力し、会員登録する  
![register](https://user-images.githubusercontent.com/90172942/157362620-0a2c82a0-cc6d-4305-8673-2168f9bd70ec.png)  

【会員登録済の方】  
メールアドレス、パスワードを入力しログインする
![login](https://user-images.githubusercontent.com/90172942/157362637-5c342591-0fb6-41a1-9041-bd5cbb0002d7.png)  

・会員情報の表示  
![index](https://user-images.githubusercontent.com/90172942/157362661-f3d59e91-9115-47b5-a9d1-6c11d2beec70.png)  

・会員情報の変更  
![edit](https://user-images.githubusercontent.com/90172942/157362680-1e1d06f8-1035-4c83-8998-6d05393f8e8f.png)  

【パスワードを忘れた場合】  
ログイン画面より、「パスワードを忘れた方」をクリック  
 ![forgot-password](https://user-images.githubusercontent.com/90172942/157362695-7b4837fd-44a5-47eb-bafc-34f3d3ed5f76.png)  
メールアドレスを入力し、「リンクを送信」をクリック  
http://localhost:1080/
にアクセスし、届いたメールの「Reset Password」をクリック  
![mailcatcher](https://user-images.githubusercontent.com/90172942/156916212-5da9d6e4-0b36-4241-a47f-523b2e809e71.png)  
メールアドレスと新しいパスワードを入力し「再設定」をクリック  
![resetpassword](https://user-images.githubusercontent.com/90172942/157362730-af2beed5-bd3b-4a2c-ba03-793abe71d8dc.png)  

ログイン画面に戻るので、メールアドレスと新たなパスワードでログイン
# Author

【NAME】 M.Ohmori  

# License  
https://choosealicense.com/no-permission/

