## Setup / installation

Docker is used to simplify php/wordpress/mysql setting up.

```
$ docker-compose up
```

Docker will start services as containers in the console,
which allows us to start developing a Wordpress theme right away.
Wordpress site will be accessible from `localhost:8080`.

If you run this command for the first time, you will need to go through
a Wordpress setting up process in the browser. And you'll
also need to change a theme to the one you're developing manually.

To stop the service, simply use `Ctrl+C`.

Note that Docker will keep Wordpress and mysql data, which take up
spaces as volumes. You can check the volumes using this command.

```
$ docker volume ls
DRIVER              VOLUME NAME
local               seriestech_db
local               seriestech_wordpress
```

In case you wish to free up these volumes, you may use this command.

```
$ docker volume rm seriestech_db seriestech_wordpress
```

## Development

Along with running Wordpress services, we also need to compile
CSS and JavaScript. You'll need to have Node.js. Check out `Procfile`.

```
$ foreman start
```

Basically you'll need to run 2 consoles, one for `$ docker-compose up`
and another for `$ foreman start`.

## Deployment

Use git pull directly from the theme folder in `/var/www/html/wp-content/themes/seriestech`.

```
ssh -i ~/.ssh/matchapps ubuntu@103.86.49.14
```
