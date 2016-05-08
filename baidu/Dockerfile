# Micro docker
FROM ubuntu
#FROM ubuntu
MAINTAINER wrfly mr.wrfly@gmail.com

# Install nginx and php
RUN apt-get update && apt-get -y dist-upgrade && apt-get install -y nginx-extras 
COPY baidu.conf /etc/nginx/nginx.conf


# Expose port
EXPOSE 80

ENTRYPOINT [ "nginx", "-g", "daemon off;" ]
