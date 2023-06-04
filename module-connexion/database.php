<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "azerty";
$dbName = "moduleconnexion";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}

?>