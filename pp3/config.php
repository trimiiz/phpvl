<?php

$user="root";
$pass="";
$server="localhost";
$dbname="mars";

try{
    $conn=new PDO("mysql:host=$server;dbname=$dbname",$user,$pass);
}catch(PDOException $e){
    echo "Connection failed: ".$e->getMessage();
}