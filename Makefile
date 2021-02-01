PARALLELISM := $(shell nproc)

.PHONY: all
all: install phpcbf phpcs

.PHONY: install
install: vendor/composer/installed.json

vendor/composer/installed.json: composer.json composer.lock
	@composer install $(INSTALL_FLAGS)
	@touch -c composer.json composer.lock vendor/composer/installed.json

.PHONY: phpcbf
phpcbf:
	@vendor/bin/phpcbf --parallel=$(PARALLELISM) || true

.PHONY: phpcs
phpcs:
	@vendor/bin/phpcs --parallel=$(PARALLELISM) $(PHPCS_FLAGS)
