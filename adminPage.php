
    <html>
    <head>
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>

    <?php include ('header.php')?>
    <?php include('Connection.php')?>
    <div class="adminPage">
   <h2>Product toevoegen</h2>
    <div class="toevoegen"></div>
   <form action="createproduct.php" method="post">
    <p>productnaam <input type="text" name="productnaam"></p>
    <p>omschrijving <input type="text" name="omschrijving"></p>
    <p>prijs <input type="text" name="prijs"></p>
     <input type="submit" name="submit" value="Sturen">

 </form>

 <h2>product aan passen</h2>


 <?php
$sql = "SELECT * FROM producten";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

foreach ($result as $key => $value){
    echo '<form action="updateproduct.php" method="post">';
    foreach ($value as $key1 => $value2){
        if ($key1 == 'id'){
            echo '<label>id:</label>';
            echo '<input type="text" name="ind" value="'. $value2 .'"><br>';
        }
        elseif ($key1 == 'productnaam'){
            echo '<label>Productnaam:</label>';
            echo '<input readonly type="text" name="productnaam" value="'. $value2 .'"><br>';
        }
        elseif ($key1 == 'omschrijving'){
            echo '<label>omschrijving:</label>';
            echo '<input type="text" name="omschrijving" value="'. $value2 .'"><br>';
        }

    }
    echo '<input type="submit" >';
    echo '</form>';
}

?>
 <h2>Product verwijderen</h2>
 <form action="deleteproduct.php" method="post">
    <p>product id <input type="text" name="id"></p>
    <input type="submit" name="submit" value="Sturen">

</div>
</body>

</html>



    <?php include ('footer.php')?>
    </body>
    </html>

    <?php
