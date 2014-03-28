skwarepon
=========

mkdir ~/vhosts/skwarepon
chmod 711 ~/vhosts/skwarepon
cd ~/vhosts/skwarepon
git init
git remote add origin https://github.com/albart/skwarepon.git
git pull origin master

chmod 600 *.php
chmod 644 *.non-php
chmod 711 directory
