# Micro docker
FROM alpine:latest
MAINTAINER wrfly mr.wrfly@gmail.com

# Install nginx and php
RUN apk --update add nginx 

# Expose port
EXPOSE 80

ENTRYPOINT [ "nginx", "-g", "daemon off;" ]
