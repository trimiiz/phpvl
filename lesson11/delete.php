<?php

include_once("config.php");

$id=$_GET['id'];

$sql="DELETE FROM user WHERE id=:id";

$getUsers=$conn->prepare($sql);

$getUsers->bindParam(':id',$id);

$getUsers->execute();
// var_dump($getUsers->errorInfo());
header("Location:dashboard.php");

?>