FROM alpine
MAINTAINER wrfly mr.wrfly@gmail.com

RUN apk add --update postgresql
RUN mkdir /var/lib/postgresql && chown postgres /var/lib/postgresql 

WORKDIR /var/lib/postgresql
COPY db.psql /var/lib/postgresql/
