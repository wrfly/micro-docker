# Micro docker
FROM alpine:latest
MAINTAINER wrfly mr.wrfly@gmail.com

# Install nginx and php
RUN apk --update add apache2 php-fpm supervisor

# Copy a phpcaptcha
COPY _admin /app
COPY .htaccess /app
COPY index.php /app

COPY supervisord.conf /etc/

# Expose port
EXPOSE 80 

# Start
CMD ["/usr/bin/supervisord", "-n"]
