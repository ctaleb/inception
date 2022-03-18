FROM debian:buster
RUN apt-get update \
	&& apt-get upgrade -y
RUN apt-get install -y \
	nginx \
	openssl
COPY /conf/html.conf /etc/nginx/sites-available/default
RUN mkdir -p /etc/nginx/ssl \
	&& openssl req -new -newkey rsa:4096 -days 365 -nodes -x509 \
	-subj "/C=FR/ST=Rhone/L=Lyon/O=42/CN=ctaleb.42.fr/emailAddress=ctaleb@student.42lyon.fr" \
	-keyout /etc/nginx/ssl/ctaleb.42.fr.key -out /etc/nginx/ssl/ctaleb.42.fr.crt
CMD ["nginx", "-g", "daemon off;"]
