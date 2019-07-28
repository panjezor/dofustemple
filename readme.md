# Your Docker

This is a LAMP stack containing the following
 -  PHP7.2
 -  Apache2.4
 -  MySQL5.7
 -  phpMyAdmin
 
### Configuration
Although this will work out of the box there are variables in the `.env` file for you to customise.

Of note, I recommend you change the `DOCUMENT_ROOT`, `MYSQL_ROOT_PASSWORD`, `MYSQL_USER` and `MYSQL_PASSWORD`. The defaults set are either insecure, or may not suit your project.

###### Apache Virtual Hosts
If you have your own virtual host files for `apache` you can place them in `etc/apache2/sites-available` to have them configured on the container.

###### SSL Certs
Place your SSL Certificates in `etc/apache2/ssl` \
_create the folder if it doesn't exist_

###### MySQL Database
If you already have a `MySQL` database you can copy it to `var/lib/mysql` to have the container use that data.

Alternatively you could import a dump via `CLI` or `phpMyAdmin`

###### php.ini
If you place your `php.ini` file in the root of this repo, it will be usable by the container.