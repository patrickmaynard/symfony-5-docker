# Symfony 5 docker containers

A Proof-of-concept of a running Symfony 5 application inside containers

Modified from https://gitlab.com/martinpham/symfony-5-docker

To run containers:

```
git clone git@gitlab.com:martinpham/symfony-5-docker.git

cd symfony-5-docker

cd docker

docker-compose up
```

## Compose

### Database (MariaDB)

...

### PHP (PHP-FPM)

Composer is included

```
docker-compose run php-fpm composer 
```

To get into the bash command line in the php-fpm container

```
docker-compose run php-fpm bash
```

To run fixtures

```
docker-compose run php-fpm bin/console doctrine:fixtures:load
```

### Webserver (Nginx)

...