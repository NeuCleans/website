FROM richarvey/nginx-php-fpm
EXPOSE 80
COPY /homedir/public_html /var/www/html
ADD v3.conf /etc/nginx/sites-available/default.conf
# RUN mkdir -p /etc/nginx/cert/
ADD dhparam.pem /etc/nginx/cert/dhparam.pem