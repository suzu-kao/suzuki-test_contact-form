# アプリケーション名
　お問い合わせフォーム

## 環境構築
### Dockerビルド
1.coachtech 内に　test1stディレクトリを作る

  - mkdir test1st

2.クローンする

  - git clone git@github.com:yukit4mu/test_contact-form.git
    
3.名前を変える

  - mv test_contact-form suzuki-test_contact-form

4.guthubにリポジトリを作る

5.紐付けする

  - git remote set-url origin git@github.com:suzu-kao/suzuki-test_contact-form.git
  
  -  git remote -v
    
6.Dockerビルド

  - docker-compose up -d --build


### Laravel環境構築
1.phpコンテナ

  - docker-compose exec php bash

2.Laravel のパッケージのインストール

  - composer install

3.laravelの初期設定

 - cp .env.example .env , 環境変数を適宜変更

  - php artisan key:generate

4.migrationファイル作成する

  - php artisan make:migration create_contacts_table

  - php artisan make:migration create_categories_table

  - php artisan make:migration create_users_table

  - php artisan migrate

5.factoryを作る

  - php artisan make:factory ContactFactory

6.model作成

　- php artisan make:model contact

  - php artisan make:model category

  - php artisan make:model user

7.seed作成

  - php artisan make:seeder ContactTableSeeder

  - php artisan make:seeder CategoriesTableSeeder

  - php artisan db:seed


## 開発環境

  - お問い合わせ画面：http://localhost/
    
  - お問い合わせ確認画面：http://localhost/confirm
    
  - お問い合わせ送信後画面：http://localhost/thanks
    
  - ユーザー登録: http://localhost/register

  - ログイン画面：http://localhost/login

  - 管理画面：http://localhost/admin
    
  - phpMyAdmin：http://localhost:8080/index.php


## 使用技術(実行環境)
- PHP 8.2.11
- Laravel 8.83.27
- MySQL 8.0.26
- nginx 1.21.1

## ER図
<img width="751" height="771" alt="Image" src="https://github.com/user-attachments/assets/bff1d925-1d28-4ce5-a655-b6743d52f5af" />
