<?php
$dsn = "mysql:host=database-1.cf24iio0kk0u.us-east-1.rds.amazonaws.com;dbname=ecom";
$user = "ecom1234";
$pass = "ecom1234";
$option = array(
  PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);
try {
  $con = new PDO($dsn, $user, $pass, $option);
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'Failed To Connect: ' . $e->getMessage();
}
