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

chmod 600 *.php -R

chmod 644 *.non-php -R

chmod 711 directory -R

git add *

git commit -m "message"

git push origin master

sudo gedit /etc/sysconfig/network-scripts/ifcfg-eth
change no to yes

Player -> Manage -> Virtual Machine Settings -> Network Adapter 3 -> Configure Adapters
choose specific adapter
