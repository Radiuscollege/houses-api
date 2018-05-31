# Houses Restful Api

Houses Restful Api is a webservice for managing the badges and points during the gamification of the course Applicatie- en Media ontwikkeling @ Radius College Breda.

## Official Documentation

### Api endpoints

* GET /api/profiles/            -  fetch all profiles
  parameters:
  * start  - at which id you want to start fetching
  * amount  - how many do you want to fetch

* GET /api/profile/D454545      -  fetch all profile data from this student
* PUT /api/profile/D343434      -  change existing user's points or create new student

* GET /api/logs/                - fetch log data of all the events

* GET /api/houses               - get all house data  including total points, ordered by rank

## Getting started
* composer install
* copy .env.example to .env
* set your env data
* set up an Api Token in the env which will be used as authorization between this service and your application
* migrate via `php artisan migrate`
* optionally you can seed through `php artisan db:seed`

## API Token
When doing requests it is important that you add a hashed 'Api-Token' in the header of your request with the same value as the  key added in your env file.

