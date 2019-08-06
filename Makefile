#!/usr/bin/make -f
BRANCH := $(shell git name-rev --name-only HEAD)

build: update-d

update-d:
	composer install

test:
	@echo ">>> Run All the test under [LeetCode]"
	vendor/bin/phpunit LeetCode --exclude-group ignore --testdox

push:
	@echo ">>> Pull Code on Current branch [$(BRANCH)]"
	git pull origin $(BRANCH) --rebase

pull:
	@echo ">>> Current branch [$(BRANCH)] Pushing Code"
	git push origin $(BRANCH)