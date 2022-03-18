#!/bin/sh
if ! wp --allow-root --path='/var/www/html/wordpress/' core is-installed; then
	wp --allow-root --path='/var/www/html/wordpress/' core install --url=$WP_URL --title=$WP_TITLE --admin_user=$WP_ADMIN --admin_password=$WP_APASS --admin_email=$WP_AMAIL
	wp --allow-root --path='/var/www/html/wordpress/' user create $WP_USER $WP_MAIL --user_pass=$WP_PASS --porcelain
fi
php-fpm7.3 -R -F