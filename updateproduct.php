<?php
include (include 'connection.php');
var_dump($_POST['ind']);
var_dump($_POST['productnaam']);
var_dump($_POST['omschrijving']);
$sql = "UPDATE producten SET omschrijving=:omschrijving WHERE id=:id";
$stmt=$conn->prepaer($sql);
$stmt->bindParam()

