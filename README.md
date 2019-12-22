# Symfony 5 docker containers

A Proof-of-concept of a running Symfony 5 application inside containers

Modified from https://gitlab.com/martinpham/symfony-5-docker

To run containers:

```
git clone https://github.com/patrickmaynard/symfony-5-docker.git

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

To run fixtures

```
docker-compose run php-fpm bin/console doctrine:fixtures:load
```

If you're lazy though and want to get into the bash command line in the php-fpm container

```
docker-compose run php-fpm bash
```

### Webserver (Nginx)

...

### Adding folders to local .git/info/exclude

```
cd ..
echo "docker/logs/" >> .git/info/exclude
echo "docker/database/data/" >> .git/info/exclude
```
