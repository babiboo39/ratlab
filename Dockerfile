FROM php:7.2.30-apache-stretch

LABEL MAINTAINER = "Ruli Simanungkalit <ruli.kalit39@gmail.com>"

COPY . /var/www/html

EXPOSE 80