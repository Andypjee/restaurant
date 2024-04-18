<?php
include ('connection.php');
$sql = "UPDATE producten SET omschrijving=:omschrijving WHERE id=:id";
$stmt= $conn->prepare($sql);
$stmt->bindParam(':omschrijving', $_POST['omschrijving']);
$stmt->bindParam(':id', $_POST['ind']);
$stmt->execute();

