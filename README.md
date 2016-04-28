# Micro Dockers

## 介绍

自己做的一些Dockerfile.

每个都有详细的介绍, 如果不详细, 那就说明容器很简单..

基于 alpine 系统的微容器.

## Dcokerfile 基本结构

### Dockerfile的四部分

- 基础镜像信息
- 维护者信息
- 镜像操作指令
- 容器启动指令

#### 基础镜像信息

- `FROM ubuntu`
- `FROM alpine`
- `FROM nginx`

#### 维护者信息

`MAINTAINER wrfly mr.wrfly@gmail.com`

#### 镜像操作指令

```bash
RUN echo "deb http://archive.ubuntu.com/ubuntu/ raring main universe" >> /et
RUN apt-get update && apt-get install -y nginx
RUN echo "\ndaemon off;" >> /etc/nginx/nginx.conf
```

#### 容器启动指令

```bash
CMD /usr/sbin/nginx
```

```bash
CMD ["nginx", "-g", "daemon off;"]
```

#### 其他指令

1. **EXPOSE** 

`EXPOSE <port> [<port>...]`

容器暴露的端口, 启动时要指定 `-P` 自动给容器分配端口, 或者 `-p aaa:bbb` 手动分配端口

2. **ENV**

```
ENV PG_MAJOR 9.3
ENV PG_VERSION 9.3.4
ENV PATH /usr/local/postgres-$PG_MAJOR/bin:$PATH
```

指定一个环境变量,会被后续`RUN`指令使用,并在容器运行时保持。

3. **ADD**

`ADD <src> <dest>`

复制源目录到容器中的目录, 源目录是dockerfile的相对路径, 也可以是URL或者一个tar文件.

4. **COPY**

`COPY <src> <dest>`

跟`ADD`差不多, 不过只能复制相对路径, 推荐使用COPY.

5. **ENTRYPOINT**

两种格式:

- `ENTRYPOINT ["executable", "param1", "param2"]`
- `ENTRYPOINT command param1 param2`

配置容器启动后执行的命令, 并且不会被`docker run`提供的参数覆盖.
如果有多个`ENTRPOINT`, 只有最后一个生效.


6. **VOLUME**

`VOLUME ["/date"]`

挂载数据卷.

7. **USER**

`USER wrfly`

指定容器启动时默认的用户名.

8. **WORKDIR**

`WORKDIR /path/to/workdir`

为后续指令提供工作目录(默认目录).

可以理解为`cd`到这个目录中, 然后后面的指令都是基于这个目录的.

可以使用多个`WORKDIR`, 比如:

```bash
WORKDIR /a
WORKDIR b
WORKDIR c
```
那么当前的目录则为`/a/b/c`

9. **ONBUILD**

`ONBUILD [INSTRUCTION]`

如果一个镜像的dockerfile中含有这个指令, 则基于这个镜像创建新的镜像的时候,都会执行指令后的内容.

## alpine 基本指令

项目主页:<https://github.com/gliderlabs/docker-alpine>

介绍: <http://gliderlabs.viewdocs.io/docker-alpine/>

用法: <http://gliderlabs.viewdocs.io/docker-alpine/usage/>

安装软件: `apk add -update nginx`

## Dockerfile Example

```
FROM gliderlabs/alpine:3.3

RUN apk add --update \
    python \
    python-dev \
    py-pip \
    build-base \
  && pip install virtualenv \
  && rm -rf /var/cache/apk/*

WORKDIR /app

ONBUILD COPY . /app
ONBUILD RUN virtualenv /env && /env/bin/pip install -r /app/requirements.txt

EXPOSE 8080
CMD ["/env/bin/python", "main.py"]
```