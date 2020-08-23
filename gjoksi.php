<?php
include 'Menu.php'
?>

<h1><a href="uploadvideo.php">Videos</a></h1>
<form action="gjoksi.php" method="post" enctype="multipart/form-data"> 

<input type="file" name="file">
<input type="submit" name="upload" value="UPLOAD">
</form>

<?php

include ('dbh.php');

if (isset($_POST['upload'])) {
    $name = $_FILES['file']['name'];
    $tmp = $_FILES['file']['tmp_name'];

    move_uploaded_file($tmp, "videos/" .$name);

    $sql = "INSERT INTO videos (name) VALUES('$name')";
    $res = mysqli_query($conn,$sql);

    if ($res ==1){
        echo "<h3>Video u ngarkua me sukses</h3>";
    }
}







