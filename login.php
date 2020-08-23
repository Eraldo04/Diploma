<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="login-page">
        <div class="form">
            <form  class="login" action="hyr_klient.php" method="post" autocomplete="off">
                <br><br>
                <input type="text" name="name" placeholder="Name" pattern="[A-Za-z]{,20}">
                <input type="password" name="password" placeholder="Password" value="">
                <input class="button" type="submit" value="Login" name="log"  placeholder="Login"></input>
                <p class="message">Not registered? <a href="register.php">Register</a></p>
            </form>
        </div>
    </div>

</body>

</html>