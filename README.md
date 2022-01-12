# Ploi SSR

It's a bare bones Laravel app with Inertia SSR enabled.

## Getting it running locally

- Clone the project
- Run `composer install`
- Run `npm install`
- Run `npm run prod`
- Serve the project with something like valet.
- Run the node server with `node public/js/ssr.js`

You should now be able to get the page source of the page, which should contain the HTML as well.
If you don't run the node server the HTML will disappear.

## Installing it on Ploi (TLDR)

- Add a daemon on the server for the node server
- Now check which worker this is (I did this by running `ls -la /home/ploi/.ploi` and checking what worker-XXXXX.log file was written). If there's no output yet, you can check the worker ID by opening the logs through Ploi, it'll error saying log file X does not exist. **@Dennis make this easier for us :Dg**.
- Now you need to allow restarting that specific daemon on the server, I did this through logging in as the ploi user, then running `sudo visudo -f /etc/sudoers.d/<site-user>`. Then add an entry like this: `<user> ALL=(ALL) NOPASSWD: /usr/bin/supervisorctl restart worker-XXXXX\:worker-XXXXX_00` (replace <user> with your user and XXXXX with the ID of the worker.
- You should now be able to run `sudo supervisorctl restart worker-XXXXX:worker-XXXXX_00` as the user you specified (try this on the server while you're at it)
- Now add that line to your deploy script (I run it after {RELOAD_PHP_FPM}).

