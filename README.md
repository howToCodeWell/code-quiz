# Code Quiz
Open source project will include an API and a App for the Code Quizzes

## System Requirements
- Vagrant

## Install API

1. Install the vagrant box
```
vagrant up
```
If the `vagrant-docker-compose` gets installed, the command `vagrant up` will need to be ram again

2. Install composer packages

```
vagrant ssh
cd api
docker-compose exec api composer install
exit
```

3. Install database migrations
```bash
vagrant ssh
cd api
docker-compose exec api bin/console doctrine:migration:migrate
```
4. Load data fixtures
```bash
vagrant ssh
cd api
docker-compose exec api bin/console doctrine:fixtures:load
```
5. Add the following entry to the `/etc/hosts`

```bash
192.168.1.200 codequiz.local
```

Restart hosts.  On Mac this is done by `sudo killall -HUP mDNSResponder`

## Webserver
To access the webserver go to [codequiz.local](http://codequiz.local)

## Database
To access the database run the following
```bash
vagrant ssh
cd api
docker exec -it api-db-1  mysql -u root -p
```
The password is set in the DB service in docker-compose.yml

# API Client

See [API-Client readme](api-client/README.md)

# Contributing to this project
See our [CONTRIBUTING](CONTRIBUTING.md) page.
