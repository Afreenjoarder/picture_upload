<?php
$ID = $_GET['ID'];
$link = mysqli_connect("localhost",
    "root",
    "shimuafrin",
    "upload");

$query = "select * from picture WHERE ID = $ID";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);
header("content-type :photo/jpeg");


?>
<h1 style="color: cadetblue" align="center">EDIT PAGE</h1>

<form action="update.php" method="post" enctype="multipart/form-data" >

    <h1>Edit</h1>

    <input type="hidden" name="ID" value="<?php echo $row['ID'];?>"/>
    <br><br>

    <label>name:</label>
    <input type="text" name="name" value = "<?php echo $row["name"];?>" /><br><br>
    <br>
    <label>Photo:</label>
    <input type="file" name="photo" value = "<?php echo $row["photo"];?>"/><br>
    <br><br>

    <input type="submit" value="Add" name ="Update">
</form>
</body>
</html>

