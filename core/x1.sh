#!/bin/bash
# script by: MrHacker-X

start_server() {
    # Install PHP if not already installed
    nohup php -S localhost:8080 -t /data/data/com.termux/files/home/.locatorx >/dev/null 2>&1 &
    echo "[+] LocaterX Server started on port 8080."
    echo "[-] URL: http://localhost:8080"
}

stop_server() {
    # Find and kill the PHP server process
    pkill -f "php -S localhost:8080 -t /data/data/com.termux/files/home/.locatorx"
    echo "[-] Server stopped."
}

if [ "$1" = "start" ]; then
    start_server
elif [ "$1" = "stop" ]; then
    stop_server
else
    echo "Usage: locatorx [start|stop]"
fi
