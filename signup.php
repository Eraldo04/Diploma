<?php
include_once'dbh.php';

 $name = $_POST['name'];
 $password = $_POST['password'];
 $email = $_POST['email'];

 
     $sql = "INSERT INTO uertable (name, password, email) VALUES ('$name', '$password', '$email')";
     mysqli_query($conn, $sql);
     header('location: faqja1.php');
?>