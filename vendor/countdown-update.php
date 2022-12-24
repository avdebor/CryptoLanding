<?php
require_once '../config/connect.php';

$date = $_POST['date'];

if ($date != "") {
    mysqli_query($connection, "UPDATE `countdown_date` SET `date` = '$date' WHERE `countdown_date`.`id` = '1'");
}

header('location: ../admin.php');
?>