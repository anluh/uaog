# Ukraine Assembly Of God
A pretty simplified docker-compose workflow that sets up a LEMP network of containers for local Laravel development. You can view the full article that inspired this repo [here](https://medium.com/@aschmelyun).


## Usage

- `docker-compose run --rm composer ...` - to run `composer` commands
- `docker-compose run --rm npm run ...` - to run `npm` commands
- `docker-compose run --rm artisan ...`  - to run `artisan` commands

Containers created and their ports (if used) are as follows:

- **nginx** - `:8080`
- **mysql** - `:3306`
- **php** - `:9000`
- **npm**
- **composer**
- **artisan**

## Setup

To get started, make sure you have [Docker installed](https://docs.docker.com/docker-for-mac/install/) on your system.

In root folder run commands:

- `make start` - to start containers
- `docker-compose run --rm composer install` or `make composer arg=install` - to install composer dependencies
- `docker-compose run --rm npm run install` or `make npm arg=install` - to install npm dependencies
- navigate to [localhost:8080](http://localhost:8080/)