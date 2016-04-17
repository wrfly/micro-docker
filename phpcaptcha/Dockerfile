# Micro docker
FROM alpine:latest
MAINTAINER wrfly mr.wrfly@gmail.com

# Copy a phpcaptcha
COPY phpcaptcha /app
COPY nginx.conf /etc/nginx/nginx.conf

# Install nginx and php
RUN apk --update add nginx php-fpm php-gd

# Expose port
EXPOSE 80

# Start
ENTRYPOINT ["/app/start.sh"]

