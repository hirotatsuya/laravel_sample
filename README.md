laravel_sample
===================

## Requirements
- laravel 5.6.26
    - see `php artisan --version`
- mysql 5.7.x
    - access `mysql -u root -p -P 13306 -h 192.168.99.100`

## Usage

### ローカルDB & laravelの起動

```
docker-compose up -d
```

### コンテナに入る

```
docker-compose exec laravel_app bash
```

- laravelコンテナ

```
docker-compose exec laravel_db bash
```

- dbコンテナ

### 停止

```
docker-compose stop
```

### 実行

```
php artisan serve
```

- `localhost:8000`にアクセス

## 初回

### 依存モジュールのインストール

```
composer install
```

### APP_KEYを埋める

```
php artisan key:generate
```

### DBにテーブル作成

```
php artisan migrate
```

### 初期データを注入

```
php artisan db:seed
```

### テーブル作成と初期データ注入の再実行

```
php artisan migrate:refresh --seed
```