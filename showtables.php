<?php

global $wpdb;

$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require_once( $parse_uri[0] . 'wp-load.php' );

$tablename = $_GET['tablename'];



$results = $wpdb->get_results( 
	"
	SELECT * 
	FROM $tablename
	WHERE 1
	"
);

$send = json_encode($results);

echo $send;
 ?> 