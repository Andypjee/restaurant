<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="create">
          <h1>Product toevoegen</h1>
          <form action="test.php" class="form-invoer" method="post">
            <input type="text" name="productnaam" placeholder="Naam" />
            <input type="text" name="omschrijving" placeholder="Omschrijving" />
            <input type="text" name="prijs" placeholder="Product prijs" />
            <button type="submit">Toevoegen</button>
          </form>
        </div>


<?php    include('connection.php');

$sql = "INSERT INTO producten(productnaam, omschrijving, prijs) VALUES (:productnaam, :omschrijving, :prijs)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':productnaam', $_POST['productnaam']);
$stmt->bindParam(':omschrijving', $_POST['omschrijving']);
$stmt->bindParam(':prijs', $_POST['prijs']);
$stmt->execute();
   ?>
</body>
</html>
