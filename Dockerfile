# FROM mattrayner/lamp:latest-1804

# ADD . /app/
# WORKDIR /app
# EXPOSE 80:80

# CMD ["/run.sh"]

FROM php:8.0-apache
RUN docker-php-ext-install pdo_mysql && docker-php-ext-enable pdo_mysql
# docker-php-ext-install pdo pdo_mysql \
#     && docker-php-ext-install mysqli\
#     && docker-php-ext-enable mysqli 
RUN apt-get update && apt-get upgrade -y
