FROM php:8.1-fpm-buster

# COMPOSER_ALLOW_SUPERUSER 1を設定するとrootでのインストールを許可できる。
# ↑ 23/3/12時点でDocker hubのcomposerページで"By default, Composer runs as root inside the container."となっているので不要そう。
ENV COMPOSER_ALLOW_SUPERUSER=1 \
  COMPOSER_HOME=/composer

# composer:2.2のイメージのファイルを、このコンテナにコピーする
COPY --from=composer:2.2 /usr/bin/composer /usr/bin/composer

# intlはロケール関係のモジュール、bcmathは少数の計算を扱う時に使う
RUN apt-get update && \
  apt-get -y install --no-install-recommends git unzip libzip-dev libicu-dev libonig-dev && \
  apt-get clean && \
  rm -rf /var/lib/apt/lists/* && \
  docker-php-ext-install intl pdo_mysql zip bcmath
# apt-get clean && rm -rf /var/lib/apt/lists/* ここはパッケージインストールで使用したキャッシュファイルを削除している。

COPY ./php.ini /usr/local/etc/php/php.ini

WORKDIR /data