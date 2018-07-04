laravel_sample
===================

## Requirements
- laravel 5.6.26
    - see `php artisan --version`

## Usage

### ローカルDB & laravelの起動

```
docker-compose up -d
```

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