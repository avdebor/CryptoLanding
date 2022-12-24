<?php
$host = "localhost";
$username = "root"; //имя пользователя
$password = "root"; //пароль от php   
$databasename = "crypto-wallet landing";

$connection = mysqli_connect($host, $username, $password, $databasename);

if(!$connection){
	die("Failed to connect to database");
}

session_start();
?>