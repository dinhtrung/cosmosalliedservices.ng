# Setup Local Wordpress

* Username: support@cosmosalliedservices.ng
* Password: abcd$56789


## Start Up Wordpress 

~~~
$ git clone git@gitlab.com:ecas/cosmosalliedservices.ng.git
$
$ # Start it up
$ cd cosmosalliedservices.ng
$ docker-compose up -d
$
$ # Dump Database
$ gunzip < db.sql.gz | docker exec -i wp_db_1 mysql -u root wp
$
$ # Done. Visit: `http://localhost:28000/wp-login.php`
~~~

## Development GuideLines

Add following lines to `wp-config.php`:

~~~php
/* FIXME: Change after done development locally */
define('WP_HOME',"http://localhost:28000" );
define('WP_SITEURL',"http://localhost:28000");
~~~
