**SYMFONY NETFLIX CLONE** 

Required:
- Docker Engine
- docker-compose plugin
- php 8.1

**CONFIGURATION**
1. ``sudo nano /etc/hosts/``
2. add this address:
``127.0.0.1       netflix.symfony``

**INSTALLATION**

1. clone the repository (appkey: ATBB5ya9GbUbdHr3cyhW3seVKjHy261E92C5)
2. go to the pulled repo root ("/netflix")
3. ``docker compose up -d``
4. ``docker compose exec -ti php bash``
5. ``composer install``
6. ``exit``

sites:

- netflix.symfony:8080 -> app
- netflix.symfony:8081 -> phpmyadmin