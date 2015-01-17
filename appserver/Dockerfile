FROM ubuntu:14.04

RUN apt-get -q update
RUN apt-get -yqq install php5-fpm php5-mysql

ADD www.conf /etc/php5/fpm/pool.d/www.conf
ADD php-fpm.conf /etc/php5/fpm/php-fpm.conf


EXPOSE 9000
ENTRYPOINT ["/usr/sbin/php5-fpm", "--fpm-config", "/etc/php5/fpm/php-fpm.conf"]
