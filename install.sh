#!/bin/bash
# By MrHacker-X
# github.com/MrHacker-X/LocatorX

# Get user input
echo
read -p "[+] Are you a Termux user? (y/N): " termux_user

# Check if the user is a Termux user
if [ "$termux_user" == "y" ]; then
  echo
  echo "<========================================>"
  sleep 0.2
  echo "        Installing in your Termux"
  sleep 0.2
  echo "<========================================>"
  sleep 0.2
  echo
  apt-get update -y
  apt-get upgrade -y
  apt-get install php -y
  mkdir /$HOME/.locatorx
  mv core/x2.txt /$HOME/.locatorx/index.html
  chmod +x core/x1.sh
  mv core/x1.sh  /data/data/com.termux/files/usr/bin/locatorx
  echo
  sleep 0.2
  echo "<========================================>"
  sleep 0.2
  echo "LocatorX is installed in your termux"
  sleep 0.2
  echo "Usage: locatorx [start|stop]"
  sleep 0.2
  echo "<========================================>"
  sleep 0.2
  echo "          Created by: MrHacker-X"
  sleep 0.2
  echo "<========================================>"
  cd ..
  rm -rf LocatorX
  sleep 0.2

else
  # Exit the script if not a Termux user
  echo
  echo "[~] Available only for termux users."
  exit 1
fi
