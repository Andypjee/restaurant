<?php


$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=restaurant", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$stmt = $conn->prepare("SELECT gebruikersnaam, wachtwoord FROM users");
$stmt->execute();

$result = $stmt->fetchALL();




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
<form action="register.php" method="POST">
    <input type="text" name="gebruikersnaam" placeholder="naam">
    <input type="password" name="wachtwoord"  placeholder="wachtwoord">
    <input type="submit" value="registeer">
    
</form>

<form action="Inloggen.php" method="GET">
    <input type="text" name="gebruikersnaam" placeholder="naam">
    <input type="password" name="wachtwoord"  placeholder="wachtwoord">
    <input type="submit" value="Inloggen">

</form>

<?php
foreach ($result as $row){
    echo '<h1> gebruikersnaam: '.$row["gebruikersnaam"] . '</h1>';
    echo '<h3> wachtwoord: '.$row["wachtwoord"] . '</h3>';
}
?>
</body>
</html>