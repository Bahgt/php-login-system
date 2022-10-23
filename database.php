<?php

$host = "sql11.freesqldatabase.com:3306";
$dbname = "sql11526282";
$username = "sql11526282";
$password = "P2cccebTtm";

$mysqli = new mysqli($host,$username,$password,$dbname);
                     
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;