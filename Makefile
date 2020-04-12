ci:
	composer validate
	bin/console
	vendor/bin/phpcs src -sp --standard=phpcs.xml
	vendor/bin/simple-phpunit tests --colors=always
	vendor/bin/phpstan analyse src -l 7
