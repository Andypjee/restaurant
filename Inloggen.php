<?php


include 'Connection.php';

$user = $_GET['gebruikersnaam'];
$pass = $_GET['wachtwoord'];

$stmt = $conn->prepare("SELECT gebruikersnaam, wachtwoord FROM users WHERE gebruikersnaam='$user' AND wachtwoord='$pass'");
$stmt->execute();
$result = $stmt->fetch();
var_dump($result);

if(isset($result)){
    echo 'klopt';
}
else{
    echo 'niet';
}
