# Micro docker
FROM alpine:latest
MAINTAINER wrfly mr.wrfly@gmail.com

# Install nginx and php
RUN apk --update add nginx php-fpm php-gd supervisor

# Copy a phpcaptcha
COPY phpcaptcha /app
COPY nginx.conf /etc/nginx/nginx.conf
COPY supervisord.conf /etc/

# Expose port
EXPOSE 80 

# Start
CMD ["/usr/bin/supervisord", "-n"]
