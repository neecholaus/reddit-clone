FROM nginx:1.16

ADD ./docker/vhost.conf /etc/nginx/conf.d/default.conf