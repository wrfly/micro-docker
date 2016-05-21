# Micro docker
FROM alpine:latest
MAINTAINER wrfly mr.wrfly@gmail.com

COPY nginx.zip /root
WORKDIR /root

# Install nginx and sbus_filter
RUN apk --update add pcre-dev build-base && \
    unzip nginx.zip && \
    cd nginx-1.10.0 && \
    ./configure \
    --without-http_gzip_module \
    --prefix=/etc/nginx \
    --http-log-path=/dev/null \
    --error-log-path=/dev/stdout \
    --sbin-path=/usr/local/sbin/nginx \
    --add-module=/root/subs_filter && \
    make && \
    make install && \
    apk del build-base && \
    cd /root && \
    rm -rf * && \
    rm -rf /var/cache/apk/* && \
    echo "nameserver 114.114.114.114" > /etc/resolv.conf

RUN echo "nameserver 114.114.114.114" > /etc/resolv.conf
COPY nginx.conf /etc/nginx/conf/

# Expose port
EXPOSE 80

ENTRYPOINT [ "nginx", "-g", "daemon off;" ]
