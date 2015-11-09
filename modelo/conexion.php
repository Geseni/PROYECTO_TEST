<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "test";

$link = new mysqli($host, $user, $password, $database);
if(!$link){
    echo "error al conetar";
}
?>