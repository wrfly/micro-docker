# Micro docker
FROM alpine:latest
MAINTAINER wrfly mr.wrfly@gmail.com

# Install nginx and php
RUN apk --update add php-fpm php-gd 

# Copy a phpcaptcha
COPY phpcaptcha /app

# Expose port
EXPOSE 80 

# Enter app directory
WORKDIR /app

# Start
CMD php -S 0.0.0.0:80
