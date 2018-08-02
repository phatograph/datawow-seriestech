## Development

You'll need to have a Sass gem and Node.js. Check out `Procfile`.

```
foreman start
```

## Deployment

The idea is to make a `git pull` on a `/colorful-instagram-template` folder on the server. 
As for OSX High Sierra, I recommend you to try out [Mountain Duck](https://mountainduck.io)
which allows you to mount a server as your local disk. So you can just `cd` to the directory
(e.g. `*/duck/Volumes/colorful-instagram.com/public_html/wp-content/themes/colorful-instagram-template`),
then run `git pull`.
