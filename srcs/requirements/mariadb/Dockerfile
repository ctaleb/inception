FROM debian:buster
RUN apt-get update \
	&& apt-get upgrade -y
RUN apt-get install -y \
	mariadb-client \
	mariadb-server
ARG DB_NAME
ARG DB_USER
ARG DB_PASS
ARG DB_RACINE
ARG DB_RPASS
RUN service mysql start \
	&& mariadb -u root -e \
	"CREATE DATABASE ${DB_NAME};\
	CREATE USER ${DB_USER}@'%' IDENTIFIED BY '${DB_PASS}';\
	GRANT ALL PRIVILEGES ON ${DB_NAME}.* TO ${DB_USER}@'%';\
	ALTER USER ${DB_RACINE}@'localhost' IDENTIFIED BY '${DB_RPASS}';"
EXPOSE 3306
CMD ["mysqld", "--bind-address=0.0.0.0"]
