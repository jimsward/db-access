<?php

global $wpdb;

$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require_once( $parse_uri[0] . 'wp-load.php' );

$table = $_POST['table'];
$keyname = $_POST['keyname'];
$key = $_POST['key'];
$col = $_POST['col'];
$text = $_POST['text'];

/*$data = array($col=>$text);
$where = array($keyname=>$key);
$wpdb->update( $table, $data, $where);*/


	//we don't want any escaping inserted with the text
	$wpdb->query(
	"
	UPDATE $table
    SET $col = '$text' 
    WHERE $keyname = $key
	"
	);

	
	

 ?> 