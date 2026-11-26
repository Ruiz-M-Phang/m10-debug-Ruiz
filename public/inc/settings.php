<?php

ini_set('display_errors', '1');
error_reporting(E_ALL);


setlocale(LC_TIME, "nl_NL");
date_default_timezone_set('Europe/Amsterdam');


// maak een verbinding met mysql en selecteer een database
switch( $_SERVER['HTTP_HOST'] ) {
	case 'cmm_lessen.dragonet.dev' :
					define( 'DB_USERNAME',	'root' );
					define( 'DB_PASSWORD',	'root' );
					define( 'DB_DATABASE',	'cmm_news' );
					define( 'DB_HOST', 		'localhost' );
					ini_set('display_errors', 1);
				    define('SITE_PATH', 	'http://cmm_lessen.dragonet.dev/lessen/dag7/practice/');
				    define('DEBUG', 		false);
				break;
				
	case 'news' :
					define( 'DB_USERNAME',	'root' );
					define( 'DB_PASSWORD',	'root' );
					define( 'DB_DATABASE',	'cmm_2016' );
					define( 'DB_HOST', 		'localhost' );
				    define('SITE_PATH', 	'http://news/');
				    define('SITE_NAME', 	'Nieuwsberichten systeem');
				    define('DEBUG', 		true);
				break;
	case 'localhost' :
					define( 'DB_USERNAME',	'phpsimp' );
					define( 'DB_PASSWORD',	'6hx7fhnFEh67ds9f6f5' );
					define( 'DB_DATABASE',	'news' );
					define( 'DB_HOST', 		'mariadb' );
				    define('SITE_PATH', 	'/var/www/html/public');
				    define('SITE_NAME', 	'Nieuwsberichten systeem');
				    define('DEBUG', 		true);
				break;
				
}	
