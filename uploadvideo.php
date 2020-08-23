
<?php
include 'Menu.php'
?>

<?php 
include('dbh.php');
$sql = "select * from videos";
$res = mysqli_query($conn,$sql);

echo "MyVideos";

while ($row = mysqli_fetch_assoc($res)) {

    $id = $row['id'];
    $name = $row['name'];
    echo "<h4><a href='ushgjoksi.php?id=$id'>" .$name. "</a></h4>";
}
?>
