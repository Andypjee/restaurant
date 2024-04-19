    <?php include 'Connection.php'?>
    <html>
    <head>
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
    
    <?php include ('header.php')?>
    <?php
    $sql ="SELECT * from producten";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();

    

    foreach ($result as $key => $value){
        echo '<div class=productalgemeen hoi'. $key . '">';
        foreach ($value as $key1 => $value2){
            if ($key1 == 'productnaam') {
            echo '<h1>' . $value2 . '</h1>';
        }
        elseif ($key1 == 'omschrijving'){
            echo '<h2>' . $value2 . '</h2>';
        }
        elseif($key1 == 'prijs'){
            echo '<h2>' . $value2 . '</h2>';
        }
        }
        echo '</div>';
    }
    ?>
    <?php include ('footer.php')?>
    </body>
    </html>

    <?php
