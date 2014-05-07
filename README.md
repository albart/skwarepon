skwarepon
=========

INITIAL SETUP

mkdir /home/jharvard/vhosts/skwarepon

ln -s /home/jharvard/vhosts/skwarepon /home/jharvard/Dropbox/

git config --global user.email "albart-at-sbcglobal.net"

git init /home/jharvard/vhosts/skwarepon

git remote add origin https://github.com/albart/skwarepon.git

sudo gedit /etc/httpd/conf.d/phpMyAdmin.conf &

under \<Directory /usr/share/phpMyAdmin/>

add Require all granted

sudo apachectl restart

su gedit /etc/my.cnf &

add log=/home/jharvard/logs/mysqld/localhost.log

mysqladmin shutdown -u jharvard -p

sudo /usr/bin/mysqld_safe &

FIX AFTER update50

sudo gedit /etc/httpd/conf.d/appliance50.conf &

add to end:
Listen 8080
\<VirtualHost *:8080>
    VirtualDocumentRoot /home/jharvard/vhosts/skwarepon/public
\</VirtualHost>

sudo apachectl restart

sudo gedit /etc/sysconfig/network-scripts/ifcfg-eth2 &

change ONBOOT=no to ONBOOT=yes

restart networking

SYNCHRONIZE FROM GITHUB

git pull origin master

find /home/jharvard/vhosts/skwarepon/ -type f | xargs chmod 644

find /home/jharvard/vhosts/skwarepon/ -name *.php -type f | xargs chmod 600

find /home/jharvard/vhosts/skwarepon/ -type d | xargs chmod 711

mysql -p skwarepon < /home/users/jharvard/vhosts/skwarepon/skwarepon.sql

SYNCHRONIZE TO GITHUB

mysqldump -p skwarepon > /home/users/jharvard/vhosts/skwarepon/skwarepon.sql

find /home/jharvard/vhosts/skwarepon/includes -type f | xargs chmod 644

find /home/jharvard/vhosts/skwarepon/public -type f | xargs chmod 644

find /home/jharvard/vhosts/skwarepon/templates -type f | xargs chmod 644

find /home/jharvard/vhosts/skwarepon/ -name *.php -type f | xargs chmod 600

find /home/jharvard/vhosts/skwarepon/ -type d | xargs chmod 711

git commit -a      //for adding a new file - make sure permission are correct (644)

verify git status has nothing to do

git push origin master
