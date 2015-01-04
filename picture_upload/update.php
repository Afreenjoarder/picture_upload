
<?php
$target ='uploads/';
$target = $target . basename( $_FILES['photo']['name']);


$ID = $_POST['ID'];
$name=  $_POST['name'];
$photo = ($_FILES['photo']['name']);

$link = mysqli_connect("localhost",
    "root",
    "shimuafrin",
    "upload");

$query = "UPDATE `upload`.`picture` SET `name` = '".$name."',
         `photo` = '".$photo."'

       WHERE `picture`.`ID` =$ID;";

mysqli_query($link, $query);
eader("content-type :photo/jpeg");
//echo $query;


if(move_uploaded_file($_FILES['photo']['tmp_name'], $target))
{

    //Tells you if its all ok
    echo "The file ". basename( $_FILES['uploadedfile']['name']). " has been uploaded, and your information has been added to the directory";
}
else {

    //Gives and error if its not
    //echo "Sorry, there was a problem uploading your file.";
}

header('location:list.php');

?>