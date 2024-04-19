<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="assets/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include ('header.php')?>
    <?php include('Connection.php')?>
<!--<form>-->
<!---->
<!--<form action="Inloggen.php" method="GET">-->
<!--    <input type="text" name="username" placeholder="naam">-->
<!--    <input type="password" name="password"  placeholder="wachtwoord">-->
<!--    <input type="submit" value="Inloggen">-->
<!---->
<!--</form>-->
    <form method="post" action="inlog.php">

        <label for="username">Gebruikersnaam:</label><br>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Wachtwoord:</label><br>
        <input type="password" id="password" name="password" required><br>

        <input id="submit-align" type="submit" name="login" value="Login">
</body>
</html>
