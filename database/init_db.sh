#! /bin/bash

if [ -d /database/wp_database ]
then
	# Start mysql
	/usr/sbin/mysqld 
else
	# We changed the mysql datadir. Let's init the new one!
	/usr/bin/mysql_install_db 2>&1 > /dev/null
	/usr/sbin/mysqld --init-file=/etc/mysql/wp_database.sql
fi
