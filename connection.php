<?php

$servername = "localhost";
$username = "root";
$password = "root";
$databasename = "vela";

$conn = mysqli_connect($servername,$username,$password,$databasename);
if(!conn){
    echo "Not Connected!";
}