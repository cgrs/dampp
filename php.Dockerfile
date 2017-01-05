FROM php:apache
MAINTAINER carlos gonzález <cgrs@cgrs.tk>
RUN apt-get update && apt-get install -y libbz2-dev libmcrypt-dev libcurl4-openssl-dev libsqlite3-dev && \
    docker-php-ext-install bz2 curl iconv mbstring mcrypt mysqli pdo pdo_mysql pdo_sqlite