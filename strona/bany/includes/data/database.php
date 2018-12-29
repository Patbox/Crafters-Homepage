<?php
$dbhost = 'localhost';
$dbuser = 'Maxbans';
$dbpass = '';
$dbname = 'CraftersBan';
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$conn->set_charset("utf8");
?>
