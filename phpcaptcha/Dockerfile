# Micro docker
FROM alpine:latest
MAINTAINER wrfly mr.wrfly@gmail.com

# Copy a phpcaptcha
COPY phpcaptcha /app
COPY nginx.conf /etc/nginx/nginx.conf

WORKDIR /app
ENV PATH /usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin

# Install nginx and php
RUN apk --update add nginx php-fpm php-gd

# Expose port
EXPOSE 80

# Start
CMD ["/bin/ash", "/app/start.sh"]
