**SYMFONY NETFLIX CLONE** 

**project is undergoing serious namespace changes, for now its not available**

This project was my first attempt at creating a big website on Symfony framework.
As I was in process of learning programming at it's core during it's development - 
it doesn't contain best practices and knowledge I have learned during my following 1-year experience
as a Web Developer. 
Treat it as an MVP of sorts. Until more changes are done, I'll consider it WIP.

**TODO (upcoming improvements):**
1. Standardizing the code - more faithful entity names, PSR, SOLID
2. Optimization ( right now controllers and templates are blotted, modal mechanism is unoptimized as can be)
3. Rewriting controllers, including redirect mechanisms, error handling, etc.
4. Rebranding - netflix -> [...]
5. implementing some kind of data server -> right now, the database is constructed 'on the go' which is obviously a mistake.
6. re-implementing movie modals (perhaps by request to the data server, paired with ajax)
7. Content wrappers, Presenters (design patterns)

Required:
- Docker Engine
- docker-compose plugin
- php 8.1

**CONFIGURATION**
1. ``sudo nano /etc/hosts/``
2. add this address:
``127.0.0.1       netflix.symfony``

**INSTALLATION**

1. clone the repository
2. go to the pulled repo root ("/NetflixSymfony")
3. ``docker compose up -d``
4. ``docker compose exec -ti php bash``
5. ``composer install``
6. ``exit``

**How to start the project**

Go to the root directory of the project "/NetflixSymfony", then:

```docker-compose up -d```  to start

```docker-compose stop```  to stop

**POST INSTALLATION STEPS**
1. get into php container:

```docker-compose exec php bash```
2. then execute:

```bin/console doctrine:migrations:migrate```
3. last but not least:


``` bin/console doctrine:fixtures:load```
write "yes" and then enter.

**Credentials for login**

as **Admin:**

login: admin@gmail.com

password: admin

as **User:**

login: user@gmail.com   
password: user





sites:

- netflix.symfony:8080 -> app
- netflix.symfony:8081 -> phpmyadmin