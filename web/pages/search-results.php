<?php 
    $page = 'index';  include
    'includes/header.php';
?>

<main class="main">


    <?php
    $searchQuery = $_GET["barname"];
    if(strlen($searchQuery) <= 0) {
        die("keine Suchergebnisse gefunden");
    }
    // echo "suchwort: ", $searchQuery, "<br>";

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "serhat";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // echo "Connected successfully<br>";

    // TODO search for any bar containing the search keyword
    $sql = "SELECT getränkekarte.*, bar.Straße, getränke.Beschreibung, getränke.HASALC FROM getränke, bar LEFT JOIN getränkekarte ON (bar.Name = getränkekarte.Name AND bar.PLZ = getränkekarte.PLZ)
    WHERE bar.Name LIKE '%$searchQuery%'
    AND getränke.Getränk = getränkekarte.Getränk";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row

        echo '<table>';
        echo '<tr>';
        echo '<th>Name</th>';
        echo '<th>Adresse</th>';
        echo '<th>Getränk</th>';
        echo '<th>Beschreibung</th>';
        echo '<th>hat Alkohol</th>';
        echo '<th>Preis</th>';
        echo '</tr>';

        while($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' .$row['Name']. '</td>';
            echo '<td>' .$row['Straße']. ', ' .$row['PLZ']. '</td>';
            echo '<td>' .$row['Getränk']. '</td>';
            echo '<td>' .$row['Beschreibung']. '</td>';
            echo '<td>' .$row['HASALC']. '</td>';
            echo '<td>' .$row['Preis']. '</td>';
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo "keine Ergebnisse gefunden";
    }
    
    $conn->close();
    ?>
    
</main>


<?php include 'includes/footer.php' ?>