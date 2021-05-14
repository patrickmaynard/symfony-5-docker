install:
	composer install

db:
	/var/www/bin/console doctrine:database:drop --force
	/var/www/bin/console doctrine:database:create
	/var/www/bin/console doctrine:migrations:migrate
	/var/www/bin/console doctrine:fixtures:load

test:
	/var/www//vendor/bin/phpunit

test-automated:
	SYMFONY_DEPRECATIONS_HELPER=disabled /var/www//vendor/bin/phpunit