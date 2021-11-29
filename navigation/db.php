<?php

$host = getenv( 'HTTP_DB_HOST' );
$user = getenv( 'root@localhost' );
$db   = getenv( 'HTTP_DB_NAME' );

if (getenv( 'HTTP_DB_PASSWORD' )) {
	$pwd = getenv( 'HTTP_DB_PASSWORD' );
} else {
	$pwd = '';
}
$con = new mysqli( "localhost", "root", $pwd, "php-sharmatrisha" );
if ($con->connect_errno) {
	die( 'Connection failed: ' . $con->connect_error );
}
