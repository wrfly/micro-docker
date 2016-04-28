#!/bin/ash
nginx -g "daemon off;" &
php-fpm &

