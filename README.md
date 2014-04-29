skwarepon
=========

sudo gedit /etc/hosts

add 127.0.0.1 skwarepon to end

sudo gedit /etc/httpd/conf.d/appliance50.conf

add to end:
Listen 8080
<VirtualHost *:8080>
    VirtualDocumentRoot /home/jharvard/vhosts/skwarepon/public
</VirtualHost>

mkdir ~/vhosts/skwarepon

cd ~/Dropbox

ln -s ~/vhosts/skwarepon

chmod 711 ~/vhosts/skwarepon

cd ~/vhosts/skwarepon

git config --global user.email "albart-at-sbcglobal.net"

git init

git remote add origin https://github.com/albart/skwarepon.git

git pull origin master

find /home/jharvard/vhosts/skwarepon/ | xargs chmod 644

find /home/jharvard/vhosts/skwarepon/ -name *.php -type f | xargs chmod 600

find /home/jharvard/vhosts/skwarepon/ -type d | xargs chmod 711

git add *

git commit -m "message"

git push origin master

sudo gedit /etc/sysconfig/network-scripts/ifcfg-eth2

change no to yes

cd ~/vhosts/skwarepon

mysqldump -u jharvard -p skwarepon > skwarepon.sql

sudo gedit /etc/httpd/conf.d/phpMyAdmin.conf

under <Directory /usr/share/phpMyAdmin/>

add Require all granted

sudo apachectl restart

sudo gedit /etc/php.ini

change SMTP = localhost 
to SMTP = outbound.att.net

smtp_port = 25
to smtp_port = 465

su gedit /etc/my.cnf

add log=/home/jharvard/logs/mysqld/localhost.log

mysqladmin shutdown -u jharvard -p

sudo /usr/bin/mysqld_safe &

