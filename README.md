# Code Quiz
Open source project will include an API and a App for the Code Quizzes

## Install API
1. Change directory to `./api`
```bash
cd api
```
2. Spin up the Docker containers
```bash
docker-compose up -d 
```

3. Run the database migrations
```bash
docker-compose exec api bin/console doctrine:migration:migrate 
```

## Webserver
To access the webserver go to [localhost](http://localhost)

## Database
To access the database run the following
```bash
docker exec -it api-db-1  mysql -u root -p 
```
The password is set in the DB service in docker-compose.yml
