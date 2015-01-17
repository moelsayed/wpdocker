# Version 0.0.1

FROM ubuntu:14.04

RUN apt-get -y update
RUN apt-get -yqq install mysql-client mysql-server curl
ADD my.cnf /etc/mysql/my.cnf
ADD wp_database.sql /etc/mysql/wp_database.sql
ADD init_db.sh /usr/local/bin/init_db.sh
RUN chmod +x /usr/local/bin/init_db.sh
#RUN chown -R mysql.mysql /database

EXPOSE 3306
ENTRYPOINT ["/bin/bash", "/usr/local/bin/init_db.sh"]
