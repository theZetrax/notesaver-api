FROM php:7.4
WORKDIR /app
COPY . .
CMD ["php", "artisan", "serve", "--port=8080"]
