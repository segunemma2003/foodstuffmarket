web: heroku-php-apache2 public/
worker: php artisan queue:work --stop-when-empty> /dev/null 2>&1
scheduler: php artisan schedule:run > /dev/null 2>&1
