FROM ubuntu:14.04


RUN apt-get -y update
RUN apt-get install -y nginx-extras

RUN mkdir /documentroot

RUN rm /etc/nginx/sites-enabled/default
ADD wordpress /etc/nginx/sites-enabled/wordpress

EXPOSE 80
ENTRYPOINT ["/usr/sbin/nginx", "-g", "daemon off;"]
