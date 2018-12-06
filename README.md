# British Side Web
This project contains the development version of British Side's web interface.
To run this project, you need to do these following steps:

## Set up a server
- Set up a MySQL server with the correct database file
- Import all files into an Apache web folder (PHP with default extensions required)
- Edit database configuration in lib/init.php
- Start the webserver and open localhost.

## Start web server without Apache

PHP contains a web server as well, you don't need to install Apache.
Just run (php -S localhost:80) in your command line and start the built in server,
don't forget to switch into the right folder. (www)

