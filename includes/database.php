<?php

$server = "localhost";
// $username = "id21150522_cms";
// $password = "Meomeomeo123@";
// $dbname = "id21150522_cms";

$username = "cms";
$password = "cms";
$dbname = "cms";

$connect = mysqli_connect($server, $username, $password, $dbname);

if (mysqli_connect_errno()){
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

