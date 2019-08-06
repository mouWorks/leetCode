#!/usr/bin/make -f
BRANCH := $(shell git name-rev --name-only HEAD)

all: build test

build:
	wget -O phpunit7.phar https://phar.phpunit.de/phpunit-7.phar
	chmod +x phpunit7.phar

test:
	@echo ">>> Run All the test under [LeetCode]"
	./phpunit7.phar LeetCode --exclude-group ignore --testdox

pull:
	@echo ">>> Pull Code on Current branch [$(BRANCH)]"
	git pull origin $(BRANCH) --rebase

push:
	@echo ">>> Current branch [$(BRANCH)] Pushing Code"
	git push origin $(BRANCH)