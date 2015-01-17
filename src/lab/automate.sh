#!/bin/bash
export DEBIAN_FRONTEND=noninteractive
apt-get install mysql-server
apt-get install php5-mysql
mysql -u root -Bse "create database lab_local;"
mysql exit
mysql -u root lab_local<var/www/Database/lab_local.sql
mysql -u root lab_local<var/www/Database/lab_test.sql
service apache2 restart


