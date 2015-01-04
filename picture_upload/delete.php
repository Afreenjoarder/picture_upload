<?php


$ID = $_GET['ID'];

$link = mysqli_connect("localhost",
    "root",
    "shimuafrin",
    "upload");

$query = "DELETE FROM `upload`.`picture` WHERE `picture`.`ID` = $ID";

mysqli_query($link, $query);
//var_dump($query);
header('location:list.php');
?>