<?php
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailto= "eraldokanani04@yahoo.com"
    $headers = "From: ".$mailFrom;
    $txt = "Te ka ardhur nje e-mail nga ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header('Location: contact.php?mailsend');
}