FROM ctftraining/base_image_nginx_mysql_php_73

LABEL Author="cl4y <qq463479242@126.com>" Blog="http://www.cl4y.top"

COPY ./files /tmp/
RUN cp -rf /tmp/html/ /var/www/ \
    && cp -f /tmp/flag.sh /flag.sh \
    && chown -R www-data:www-data /var/www/html \
    && sed -i 's/skip-networking/#skip-networking/' /etc/my.cnf.d/mariadb-server.cnf 
