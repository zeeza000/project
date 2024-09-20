<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'db_itregit011';

$conn = new mysqli($hostname, $username, $password, $dbname);

if($conn->connect_error) {
    die('Connect failed: '.$conn->connect_error);
}
    