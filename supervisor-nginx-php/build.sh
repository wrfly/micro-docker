#!/bin/bash
docker build -t wrfly/supervisor-nginx-php .

[[ "$?" == "0" ]] || exit 1

echo
echo
echo docker run --rm -ti -p 8081:80 wrfly/supervisor-nginx-php
docker run --name snp --rm -ti -p 8081:80 wrfly/supervisor-nginx-php
