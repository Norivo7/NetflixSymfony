**SYMFONY NETFLIX CLONE** 

This project was my first attempt at creating a big website on Symfony framework.
As I was in process of learning programming at it's core during it's development - 
it doesn't contain best practices and knowledge I have learned during my 1-year experience
as a Web Developer. 
Treat it as an MVP of sorts. Until more changes are done, I'll consider it WIP.

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

sites:

- netflix.symfony:8080 -> app
- netflix.symfony:8081 -> phpmyadmin