# Micro docker
FROM alpine:latest
MAINTAINER wrfly mr.wrfly@gmail.com

# Install nginx and php
RUN apk --update add nginx php5-fpm php5-gd php5-mysql php5-pdo_mysql php5-mysqli supervisor && \
	rm -rf /var/cache/apk

# Copy config file
COPY nginx.conf /etc/nginx/nginx.conf
COPY supervisord.conf /etc/

# Expose port
EXPOSE 80 

COPY app /app

# Start
CMD ["/usr/bin/supervisord", "-n"]
