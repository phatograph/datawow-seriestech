## Setup / installation

Docker is used simplify php/wordpress/mysql setting up.

```
$ docker-compose up
```

Docker will start services as containers in the console,
which allows us to be able to start developing right away.

To stop the service, simply use `ctrl+C`.

Note that Docker will keep wordpress and mysql data, which take up
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

Along with running wordpress services, we also need to compile
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
