FROM alpine:latest
MAINTAINER wrfly <mr.wrfly@gmail.com>
RUN apk --update add mysql mysql-client && \
    rm -rf /var/cache/apk/* && \
    mysql_install_db && \
    sed -i "s/mysqld\/mysqld.sock/mysqld.sock/" \
    /etc/mysql/my.cnf && \
    rm -rf /var/lib/mysql/ib*
COPY my.cnf /etc/my.cnf
EXPOSE 3306
CMD ["mysqld"]