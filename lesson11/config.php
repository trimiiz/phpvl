<?php

$user="root";
$pass="";
$server="localhost";
$dbname="dbtrimi";

try{
    $conn=new PDO("mysql:host=$server;dbname=$dbname",$user,$pass);
}catch(PDOException $e){
    
    echo "Error" . $e->getMessage();
}