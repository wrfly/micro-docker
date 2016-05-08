# Micro docker
FROM ubuntu
MAINTAINER wrfly mr.wrfly@gmail.com

# Install nginx and php
RUN apt-get update && apt-get install gcc
COPY ngx_http_substitutions_filter_module-master /root/ngx_http_substitutions_filter_module-master
COPY nginx-1.9.15 /root/nginx-1.9.15
COPY baidu.conf /etc/nginx/nginx.conf

WORKDIR /root/nginx-1.9.15
RUN ./configure --add-module=/root/ngx_http_substitutions_filter_module-master

# Expose port
EXPOSE 80

#ENTRYPOINT [ "nginx", "-g", "daemon off;" ]
