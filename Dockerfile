FROM node:22-alpine AS node_builder
WORKDIR /app
COPY package.json package-lock.json ./
RUN npm install
COPY . .
RUN npm run build
FROM richarvey/nginx-php-fpm:latest
WORKDIR /var/www/html
COPY . .
COPY --from=node_builder /app/public/build /var/www/html/public/build
RUN composer install --no-dev --optimize-autoloader --no-interaction
RUN chown -R www-data:www-data storage bootstrap/cache
RUN chmod -R 775 storage bootstrap/cache
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1
ENV APP_ENV production
ENV APP_DEBUG false
ENV LOG_CHANNEL stderr
EXPOSE 80
