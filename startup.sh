#!/bin/sh
sudo yum update -y
sudo yum groupinstall -y "Web Server" "MySQL Database" "PHP Support"
sudo yum install -y php-mysql
sudo service httpd start
sudo chkconfig httpd on
chkconfig --list httpd
ls -l /var/www

sudo yum install -y php
sudo service httpd restart

sudo service mysqld start
sudo mysql_secure_installation
sudo chkconfig mysqld on
echo "<?php phpinfo(); ?>" > /var/www/html/phpinfo.php

mkdir /var/www/html/cloud/
cp * /var/www/html/cloud/.
