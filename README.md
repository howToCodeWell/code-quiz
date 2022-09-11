# Code Quiz
Open source project will include an API and a App for the Code Quizzes


## Install API

1. Install the `vagrant-docker-compose` plugin

```
vagrant plugin install vagrant-docker-compose
```

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
4. Add the following entry to the `/etc/hosts`

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
