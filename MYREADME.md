MY README
============

## docker-machine
- docker-machine ssh default
    - docker-machineに接続
- docker-machine start default
    - 起動
- docker-machine restart
    - 再起動
- docker-machine stop
    - 停止
- docker-machine ls
    - 使用可能なマシンの一覧
- docker-machine status default
    - 状態の確認
- docker-machine ip default
    - ipアドレスの確認
- docker-machine env default
    - 環境変数の確認

## docker
- docker ps
    - コンテナ起動確認
- docker ps -a
    - 停止中のコンテナも表示
- docker container prune
    - 全てのコンテナを削除
- docker rm コンテナID
    - コンテナ削除
- docker network ls
    - dockerのネットワーク確認
- docker network inspect ネットワーク名
    - ネットワーク情報確認(idアドレス確認)
- docker exec -it コンテナID /bin/bash
    - コンテナに入る
- docker images
    - イメージ一覧

## docker-compose
- docker-compose up -d
    - コンテナ起動
- docker-compose ps
    - コンテナ確認
- docker-compose stop
    - コンテン停止
- docker-compose exec コンテナ名 bash
    - コンテナに入る

## コンテナ内
- cat /etc/hosts
    - コンテナ内でホストされているIPアドレスを確認
- apt-get update
    - アップデート
- apt-get install vim
    - viがない
- apt-get install iputils-ping net-tools
    - pingのインストール

### やること
- まず、dockerを立ち上げる
    - docker-machine start
- 環境変数を確認してパスを通す
    - docker-machine env
    - eval (docker-machine env)
- コンテナの起動(Dockfileを編集したときのみ--buildをする)
    - docker-compose up -d --build

## php
- 依存モジュールをインストール
    - composer install
- .envのAPI_KEYが埋まる
    - php artisan key:generate
- テーブル作成
    - php artisan migrate
- migrationsフォルダが無いとき
    - mkidir migrations
        - フォルダ作成
    - php artisan make:migration create_user_table
        - migrationファイルの作成(ex: userテーブル)
- 初期データ注入
    - php artisan db:seed
- 実行
    - php artisan serve
- 綺麗にするやつ
    - php artisan cache:clear
    - composer dump-autoload