<?php
  require 'config/connect.php';
  unset($_SESSION['logged_user']);
  header("location: login.php");
?>