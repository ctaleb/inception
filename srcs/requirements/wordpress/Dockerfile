FROM debian:buster
RUN apt-get update			\
	&& apt-get upgrade -y
RUN apt-get install -y	\
	wget				\
	curl				\
	php-fpm				\
	php-mysql			\
	php-mbstring		\
	php-zip				\
	php-gd				\
	php-xml				\
	php-pear			\
	php-gettext			\
	php-cgi
	# php-curl			\
	# php-dom			\
	# php-exif			\
	# php-fileinfo		\
	# php-hash			\
	# php-imagick		\
	# php-mbstring		\
	# php-openssl		\
	# php-pcre			\
	# php-xml			\
	# php-zip			\
COPY /conf/www.conf /etc/php/7.3/fpm/pool.d/www.conf
RUN service php7.3-fpm start							\
	&& wget https://wordpress.org/latest.tar.gz			\
	&& mkdir -p /var/www/html/							\
	&& tar xvf latest.tar.gz --directory /var/www/html/	\
	&& rm latest.tar.gz
RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar	\
	&& chmod +x wp-cli.phar																\
    && mv wp-cli.phar /usr/local/bin/wp
COPY /conf/wp-config.php /var/www/html/wordpress/wp-config.php
ARG DB_NAME=${DB_NAME}
ARG DB_USER=${DB_USER}
ARG DB_PASS=${DB_PASS}
ARG DB_HOST=${DB_HOST}
# ENV WP_AUTH_KEY=${WP_AUTH_KEY}
# ENV WP_SECURE_AUTH_KEY=${WP_SECURE_AUTH_KEY}
# ENV WP_LOGGED_IN_KEY=${WP_LOGGED_IN_KEY}
# ENV WP_NONCE_KEY=${WP_NONCE_KEY}
# ENV WP_AUTH_SALT=${WP_AUTH_SALT}
# ENV WP_SECURE_AUTH_SALT=${WP_SECURE_AUTH_SALT}
# ENV WP_LOGGED_IN_SALT=${WP_LOGGED_IN_SALT}
# ENV WP_NONCE_SALT=${WP_NONCE_SALT}
ENV WP_ADMIN=${WP_ADMIN}
ENV WP_APASS=${WP_APASS}
ENV WP_AMAIL=${WP_AMAIL}
ENV WP_USER=${WP_USER}
ENV WP_PASS=${WP_PASS}
ENV WP_MAIL=${WP_MAIL}
ENV WP_TITLE=${WP_TITLE}
ENV WP_URL=${WP_URL}
RUN sed -i "s/db_name_here/${DB_NAME}/g" /var/www/html/wordpress/wp-config.php \
	&& sed -i "s/db_user_here/${DB_USER}/g" /var/www/html/wordpress/wp-config.php \
	&& sed -i "s/db_pass_here/${DB_PASS}/g" /var/www/html/wordpress/wp-config.php \
	&& sed -i "s/db_host_here/${DB_HOST}/g" /var/www/html/wordpress/wp-config.php
	# && sed -ir "s/auth_key_here/${WP_AUTH_KEY}/g" /var/www/html/wordpress/wp-config.php
	# && sed -i "s/secure_auth_key_here/${WP_SECURE_AUTH_KEY}/g" /var/www/html/wordpress/wp-config.php \
	# && sed -i "s/logged_in_key_here/${WP_LOGGED_IN_KEY}/g" /var/www/html/wordpress/wp-config.php \
	# && sed -i "s/nonce_key_here/${WP_NONCE_KEY}/g" /var/www/html/wordpress/wp-config.php \
	# && sed -i "s/auth_salt_here/${WP_AUTH_SALT}/g" /var/www/html/wordpress/wp-config.php \
	# && sed -i "s/secure_auth_salt_here/${WP_SECURE_AUTH_SALT}/g" /var/www/html/wordpress/wp-config.php \
	# && sed -i "s/logged_in_salt_here/${WP_LOGGED_IN_SALT}/g" /var/www/html/wordpress/wp-config.php \
	# && sed -i "s/nonce_salt_here/${WP_NONCE_SALT}/g" /var/www/html/wordpress/wp-config.php
COPY /script/run.sh /
EXPOSE 9000
CMD ["sh", "/run.sh"]
