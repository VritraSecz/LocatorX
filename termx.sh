# Script by MrHacker-X
# This setup script for termux

apt-get updae -y
apt-get upgrade -y
apt-get install php -y
apt-get install figlet -y
mkdir /$HOME/.TraceX
mv .index.php /$HOME/.TraceX/index.php
mv .style.css /$HOME/.TraceX/style.css
mv .logo.png /$HOME/.TraceX/logo.png
echo "php -S localhost:9999 -t /$HOME/.TraceX" >> tracex
mv tracex /data/data/com.termux/files/usr/bin
chmod +x /data/data/com.termux/files/usr/bin/tracex
figlet DONE
echo 'Installation is completed now you can launch TraceX-GUI by just typing tracex in your terminal'
rm -rfv ../TraceX-GUI
