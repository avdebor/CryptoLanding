<?php
require_once '../config/connect.php';

$filename = $_POST['filename'];

if ($filename != "") {
	mysqli_query($connection, "UPDATE `filename` SET `filename` = '$filename' WHERE `filename`.`id` = '1'");
}

header('location: ../admin.php');
?>