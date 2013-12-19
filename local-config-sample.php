<?php
/*
This is a sample local-config.php file
In it, you *must* include the four main database defines

You may include other settings here that you only want enabled on your local development checkouts
*/

define( 'DB_NAME', 'local_db_name' );
define( 'DB_USER', 'local_db_user' );
define( 'DB_PASSWORD', 'local_db_password' );
define( 'DB_HOST', 'localhost' ); // Probably 'localhost'


// define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/path/to/your/app' );
// define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/path/to/your/');

/* Reminder and explanation for local setup TODOs 

1. Especially for subdirectory MAMP, point content url to the right folder. (Notice for WP_CONTENT_URL it's pointed to '../app' while WP_HOME is just '../').

More explanation here: http://discourse.roots.io/t/setup-local-wordpress-skeleton-on-mamp-to-work-like-in-composer-with-wordpress-screencast/898

2. Replace Roots override activation when switching themes: https://gist.github.com/ajmalafif/7827805
*/