<?php

global $wpdb;

$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require_once( $parse_uri[0] . 'wp-load.php' );
$sql = "SHOW TABLES";

//respond with a list of tables to populate the dropdown list
$results = $wpdb->get_results($sql );
$send = json_encode($results);
echo $send;
 ?> 