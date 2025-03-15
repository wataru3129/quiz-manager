FROM nginx:1.26-alpine

WORKDIR /var/www/html
ENV TZ=Asia/Tokyo

RUN apk update && apk add bash

COPY ./infra/nginx/*.conf /etc/nginx/conf.d/