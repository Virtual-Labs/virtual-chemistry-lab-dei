#!/bin/bash
export DEBIAN_FRONTEND=noninteractive
apt-get install -y mysql-server
apt-get install -y php5-mysql
mysql -u root -Bse "create database lab_local;"
mysql -u root lab_local<Database/lab_local.sql
mysql -u root lab_local<Database/lab_test.sql
service apache2 restart


