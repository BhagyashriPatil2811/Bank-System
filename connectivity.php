<?php

$servername="localhost";
$username="Bhagyashri";
$password="28112000";
$dbname="banking_system";

$con=mysqli_connect($servername,$username,$password,$dbname);

if(!$con){
    die("could not connect to the database due to the following error -->".mysqli_connect_error());

}
?>