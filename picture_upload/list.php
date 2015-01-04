<?php
// Connects to your Database

$link = mysqli_connect("localhost",
    "root",
    "shimuafrin",
    "upload");



//Retrieves data from MySQL

$query = "SELECT * FROM `picture` ";

$result= mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
header("content-type :photo/jpeg");


//$data = mysql_query("SELECT * FROM image") or die(mysql_error());

//Puts it into an array;
/*
while($info = mysql_fetch_array( $data )) {
//Outputs the image and other data
    echo "<img src=localhost/picture_upload/uploads/".$info['photo'] ."> <br>";
    echo "<b>Name:</b> ".$info['name'] . "<br> ";

}*/

?>
<table border="1" width="70%">
    <tr>
        <td>ID</td>
        <td>name</td>
        <td>photo</td>

    </tr>

    <?php

    foreach($result as $row){



        ?>

        <tr>
            <td><?php echo $row['ID']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['photo']?></td>

            <td>
                <a href="view.php?ID=<?php echo $row['ID']?>">View</a> |
                <a href="edit.php?ID=<?php echo $row['ID']?>">Edit</a> |
                <a href="delete.php?ID=<?php echo $row['ID']?>">Delete</a> |

            </td>
        </tr>


    <?php
    }



    ?>

</table>


