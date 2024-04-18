<?php


include 'Connection.php';

session_start();
$user = $_GET['gebruikersnaam'];
$pass = $_GET['wachtwoord'];

$stmt = $conn->prepare("SELECT gebruikersnaam, wachtwoord FROM users WHERE gebruikersnaam='$user' AND wachtwoord='$pass'");
$stmt->execute();
$result = $stmt->fetch();
var_dump($result);


$data = $stmt->fetch();
var_dump($data);
var_dump($result);
if(isset($result)){
    session_start();
    $_SESSION['user'] = $data['gebruikersnaam'];
    $_SESSION['rol'] = $data['admin'];
}
else{
    echo 'niet';
}