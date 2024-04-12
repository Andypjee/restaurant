
    <?php include 'connection.php'?>
    <html>
    <head>
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
    
    <?php include ('header.php')?>
 <form action="createproduct.php" method="post">
    <p>productnaam <input type="text" name="productnaam"></p>
    <p>omschrijving <input type="text" name="omschrijving"></p>
    <p>prijs <input type="text" name="prijs"></p>
    <p>categorie <input type="text" name="categorie"></p>
    <p> <input type="submit" name="submit" value="Sturen"></p>
<?php
include('connection.php');
try {
    $sql = "INSERT INTO producten(productnaam, omschrijving, prijs) VALUES (:productnaam, :omschrijving, :prijs)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':productnaam', $_POST['productnaam']);
    $stmt->bindParam(':omschrijving', $_POST['omschrijving']);
    $stmt->bindParam(':prijs', $_POST['prijs']);
    $stmt->execute();
}
catch (PDOException $e){}


   ?>

 </form>



    <?php include ('footer.php')?>
    </body>
    </html>

    <?php
