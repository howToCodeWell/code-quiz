# Code Quiz
Welcome to the Code Quiz Open Source project from [How To Code Well](https://howtocodewell.net). 

This is an Open Source project that includes an API and an App for the daily code quizzes.

The daily code quizzes are published to [Instagram](https://instagram.com/howtocodewell) and [Twitter](https://twitter.com/howtocodewell). This GitHub project is under development and will eventually allow access to the quizzes via a JSON API, Mobile app and website. 

This Monorepo contains the following three projects.

1. **API** - A Symfony 6, PHP 8  and Maria DB backend.
2. **API-Client** - A NPM package for mock testing the API. 
3. **App** - A Mobile application that displays code quizzes.
4. **Website** - A Website that displays code quizzes.

## Project development
This project is being developed live on [YouTube](https://youtube.com/howtocodewell) most Tuesdays at 6pm BST and most Sundays on [Twitch](https://twitch.tv/howtocodewell).


## Help needed!
If you would like to help build the project then please pick a ticket from the issues. If you are new to Open Source then pick an issue labeled `good first issue`. 

Pull requests may be  reviewed live on Twitch/YouTube.

# Contributing to this project

See the [CONTRIBUTING](CONTRIBUTING.md) guide on how to contribute to the project.

---

## System Requirements

- Docker
- Docker Compose
- Node
- NPM
- Yarn

---

## Local Install

1. Clone the repository
```bash
git clone git@github.com:howToCodeWell/code-quiz.git
```

2. Spin up the containers

```bash
docker-compose up -d
```

3. Install database migrations
```bash
docker-compose exec api bin/console doctrine:migration:migrate
```

4. Load data fixtures
```bash
docker-compose exec api bin/console doctrine:fixtures:load
```

5. Add the following entry to the `/etc/hosts`

```bash
127.0.0.1 codequiz.local
127.0.0.1 api.codequiz.local
```

## Generating the OpenAPI specification
From the `api` folder run the following to create `openapi.yaml` in the `./docs/generated` folder.  This is ignored from the code base
```bash
docker-compose exec api bash -c "bin/console api:openapi:export --yaml" > ./docs/generated/openapi.yaml
```

## Install database and data
1. Run the migrations
```bash
docker-compose exec api bash -c 'bin/console doctrine:migrations:migrate'
```

2. Run the data fixtures
```bash
docker-compose exec api bash -c 'bin/console doctrine:fixtures:load' 
```
---

## Accessing the projects

- The API can be reached at [http://api.codequiz.local/api/v1](http://api.codequiz.local/api/v1)
- The website can be reached at [http://codequiz.local/](http://codequiz.local/)

---

## API request examples

**Get a list of quizzes**
```bash
curl -X 'GET' \
  'http://api.codequiz.local/api/v1/quizzes' \
  -H 'accept: application/ld+json'
```
**Get the first quiz**
```bash
curl -X 'GET' \
  'http://api.codequiz.local/api/v1/quiz/1' \
  -H 'accept: application/ld+json'
```
**Get the first question**
```bash
curl -X 'GET' \
  'http://api.codequiz.local/api/v1/question/1' \
  -H 'accept: application/ld+json'
```

---


# Running the API Client locally

## Install

1. Install the packages
```
yarn install
```

2. Run the mock server
```
yarn start
```

3. Generate the OpenAPI TypeScript module
   Make sure you have already generated the openapi spec file.

[See this guide for details](https://github.com/howToCodeWell/code-quiz/wiki/API#generating-the-openapi-specification)
```
yarn run generate-api 
```

## Testing

```
yarn run lint
```

```
yarn run test
```

--- 
# Mobile App

Yet to be built
