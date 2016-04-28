# Micro docker
FROM alpine:latest
MAINTAINER wrfly mr.wrfly@gmail.com


#WORKDIR /app
#ENV PATH /usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin

# Install nginx and php
RUN apk --update add nginx php-fpm php-gd supervisor

# Copy a phpcaptcha
COPY phpcaptcha /app
COPY nginx.conf /etc/nginx/nginx.conf
COPY supervisord.conf /etc/

# Expose port
EXPOSE 80 9001

# Start
CMD ["/usr/bin/supervisord", "-n"]
