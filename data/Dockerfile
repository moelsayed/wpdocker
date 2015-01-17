# Version 0.0.1

FROM ubuntu:14.04

RUN mkdir /database /documentroot
WORKDIR /documentroot

#RUN wget   https://wordpress.org/latest.tar.gz
ADD https://wordpress.org/latest.tar.gz /documentroot/latest.tar.gz
RUN tar zxvf latest.tar.gz --strip-components=1

ADD wp-config.php /documentroot/wp-config.php
VOLUME /documentroot
VOLUME /database
