<?php
require('dbh.php');
session_start();
if(isset($_POST['log'])){
$name=$_POST['name'];
$password=$_POST['password'];

$check_name="select name from uertable where name = '$name'";
$if_check_name = $conn->query($check_name);

$check_password="select password from uertable where password = '$password'";
$if_check_password = $conn->query($check_password);


 if($if_check_name && $if_check_password)
{

    if($if_check_name->num_rows == 1 && $if_check_password->num_rows == 1)
    {
        header('location: faqja1.php');
}

else
{
    echo"Te dhenat e futura te gabuara";
}
}
}
?>