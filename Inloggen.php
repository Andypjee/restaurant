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
<form>

<form action="Inloggen.php" method="GET">
    <input type="text" name="gebruikersnaam" placeholder="naam">
    <input type="password" name="wachtwoord"  placeholder="wachtwoord">
    <input type="submit" value="Inloggen">

</form>
</body>
</html>
