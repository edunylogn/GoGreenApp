#!/usr/bin/env bash
apt-get update
sudo apt-get install apache2 php5 php5-mysql mysql-server-5.5 php5-curl php5-intl php5-xdebug
sudo a2enmod rewrite
echo "zend_extension=/usr/lib/php5/20121212/xdebug.so" > /etc/php5/mods-available/xdebug.ini
echo "xdebug.remote_enable=1" >> /etc/php5/mods-available/xdebug.ini
echo "xdebug.remote_connect_back=0" >> /etc/php5/mods-available/xdebug.ini
echo "xdebug.remote_port=9000" >> /etc/php5/mods-available/xdebug.ini
echo "xdebug.remote_mode=req" >> /etc/php5/mods-available/xdebug.ini
echo "xdebug.remote_handler=dbgp" >> /etc/php5/mods-available/xdebug.ini
echo "xdebug.idekey=gogkey" >> /etc/php5/mods-available/xdebug.ini
echo "xdebug.remote_log=/tmp/xdebug.log" >> /etc/php5/mods-available/xdebug.ini
echo "xdebug.remote_autostart=1" >> /etc/php5/mods-available/xdebug.ini
echo "xdebug.remote_host=10.253.253.253" >> /etc/php5/mods-available/xdebug.ini
sudo service apache2 reload
sudo service apache2 restart

fuera sudo ifconfig lo0 alias 10.253.253.253