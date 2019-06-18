<?php

// try {
//   $db = new PDO("sqlite:".__DIR__."/database.db");
//   $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
// } catch (Exception $e) {
//   echo "Unable to connect";
//   //echo $e->getMessage();
//   exit;
// }

// $url = parse_url(getenv("mysql://bb12583534e53f:9b45e202@us-cdbr-iron-east-02.cleardb.net/heroku_56083f6e147db1c?reconnect=true"));
// $server = $url["us-cdbr-iron-east-02.cleardb.net"];
// $username = $url["bb12583534e53f"];
// $password = $url["9b45e202"];
// $dbname = substr($url["heroku_56083f6e147db1c"], 1);
// $connection = new mysqli($server, $username, $password, $dbname);

$dsn = "mysql:host=us-cdbr-iron-east-02.cleardb.net;dbname=heroku_56083f6e147db1c;port=3306"; $username = "bb12583534e53f"; $password = "9b45e202"; //(For local use, PHPMyAdmin doesn't use a password.) 
try{
$db = new PDO($dsn, $username, $password); 
//if this dumps an object we are connected 
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e){
	echo "Unable to connect";
	echo $e->getMessage();
	exit;
}
// $dsn = "mysql://bb12583534e53f:9b45e202@us-cdbr-iron-east-02.cleardb.net/heroku_56083f6e147db1c?reconnect=true"; 
// $username = "bb12583534e53f"; $password = "9b45e202"; //(For local use, PHPMyAdmin doesn't use a password.) 
// try{
// $db = new PDO($dsn, $username, $password); 
// //if this dumps an object we are connected 
// $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch(Exception $e){
// 	echo "Unable to connect";
// 	echo $e->getMessage();
// 	exit;
// }