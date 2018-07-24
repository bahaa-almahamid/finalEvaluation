<?php
//Here we make the connection with the local database making a variable of boolean to check if we work online or on local host to target the database..
$online = false;  // So its not online .. we go to the second option . localhost .. 

if ($online) {
	$host     = "";
	$user     = "";
	$password = "";
	$dbName   = ""; 
} else {
	$host     = "localhost";
	$user     = "root";
	$password = "";
	$dbName   = "exo1_userslist"; // here is the new database where we injected the informations . 
}

$db = new PDO('mysql:host='.$host.';dbname='.$dbName.';charset=utf8',$user,$password);


// hopfully it works well .. 
