<?php
include 'Connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="assets/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<main>
    <?php
    include "header.php";
    ?>

</main>




<form action="register.php" method="POST">
<input type="text" name="gebruikersnaam" placeholder="naam">
<input type="password" name="wachtwoord"  placeholder="wachtwoord">
<input type="submit" value="registeer">

    form>

    <form action="Inloggen.php" method="GET">-->
        <input type="text" name="gebruikersnaam" placeholder="naam">-->
        <input type="password" name="wachtwoord"  placeholder="wachtwoord">-->
        <input type="submit" value="Inloggen">

    </form><

<?php
foreach ($result as $row){
    echo '<h1> gebruikersnaam: '.$row["gebruikersnaam"] . '</h1>';
    echo '<h3> wachtwoord: '.$row["wachtwoord"] . '</h3>';
}
?>
</body>
</html>