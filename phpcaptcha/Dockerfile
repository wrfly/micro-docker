# micro docker
FROM alpine:latest
MAINTAINER wrfly mr.wrfly@gmail.com

# Copy a phpcaptcha
COPY phpcaptcha /app
COPY nginx.conf /etc/nginx/nginx.conf

# install nginx
RUN apk --update add nginx php-fpm php-gd

EXPOSE 80
   
ENTRYPOINT ["/app/start.sh"]
