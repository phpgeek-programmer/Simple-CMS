<?php
ini_set( "display_errors", true );
date_default_timezone_set( "Asia/Jakarta" );  // http://www.php.net/manual/en/timezones.php

define("ROOT_DIR", dirname(__DIR__));
define( "CLASS_PATH", ROOT_DIR . "/classes" );
define( "TEMPLATE_PATH", ROOT_DIR . "/templates" );
define( "HOMEPAGE_NUM_ARTICLES", 5 );

require( CLASS_PATH . "/Article.php" );
 
function handleException( $exception ) {
  echo "Sorry, a problem occurred. Please try later.";
  error_log( $exception->getMessage() );
}
 
set_exception_handler( 'handleException' );
?>