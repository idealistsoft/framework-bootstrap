#!/usr/bin/php

<?php

require_once 'vendor/autoload.php';
define( 'INFUSE_BASE_DIR', dirname( __DIR__ ) );

use App\Console\Application;

// bootstrap an App instance
$config = (array)@include 'config.php';
$config[ 'modules' ][ 'middleware' ] = [];
$config[ 'sessions' ][ 'enabled' ] = false;
$config[ 'logger' ][ 'enabled' ] = false;
$app = new App( $config );

$application = new Application( $app );
return $application->run();