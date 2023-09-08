# Yplus

## Env
- copy .env.example to .env
- put the right configs at .env

## Docker
- Go to the directory where "docker-compose.yml" is located
- run "docker-compose up" to setup docker container

## PHP Composer
- inside the container, go to /var/www/yplus
- run "composer install" to install all the php project dependencies

## If necessary
```
chmod -R 775 storage/
chmod -R 775 bootstrap/cache/
chown -R www-data:www-data storage bootstrap/cache
```

## Web Interface
- localhost:7820