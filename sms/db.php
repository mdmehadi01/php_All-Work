<?php
$name="localhost";
$user="root";
$password="";
$db="sms01";
$connection= new mysqli($name,$user,$password,$db);

if ($connection){
}
else{
    echo"Connection Faield!";
}
?>