# OLD, BROKEN - Symfony 5 docker containers

### Use this one instead: https://github.com/patrickmaynard/symfony-five-docker-template

=============

A Proof-of-concept of a running Symfony 5 application inside containers

Modified from https://gitlab.com/martinpham/symfony-5-docker

### Cloning/renaming the project

To clone and rename the project:

```
git clone https://github.com/patrickmaynard/symfony-5-docker.git
mv symfony-5-docker my-new-repo-name
cd my-new-repo-name

#Now create the new repository manually on GitHub. Then do these steps ...

git remote remove origin
git remote add origin https://github.com/patrickmaynard/my-new-repo-name.git
git commit --allow-empty -m "First commit in my new project"
git push
```

### Running the project

To run containers:

```
git clone https://github.com/patrickmaynard/symfony-5-docker.git

cd symfony-5-docker

cd docker

docker-compose up
```

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

... and you can then run Make commands like this:

```
make install
make db
make test
```

### Webserver (Nginx)

...

### Adding folders to local .git/info/exclude

This will allow you to *locally* omit files from version control. 

That can be useful in many cases -- for example, if you don't want to remove the original database contents, but you also don't want to see every DB change suggested for staging by git.

```
cd ..
echo "docker/database/data/" >> .git/info/exclude
echo "docker/logs/" >> .git/info/exclude
```
