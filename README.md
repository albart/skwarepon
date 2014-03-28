skwarepon
=========

sudo gedit /etc/hosts
add 127.0.0.1 skwarepon to end
mkdir ~/vhosts/skwarepon
chmod 711 ~/vhosts/skwarepon
cd ~/vhosts/skwarepon
git config --global user.email "albart@sbcglobal.net"
git init
git remote add origin https://github.com/albart/skwarepon.git
git pull origin master

chmod 600 *.php -R
chmod 644 *.non-php -R
chmod 711 directory -R
git add *

git commit -m "message"
git push origin master
