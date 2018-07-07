<?php 
    $page = 'index';  include
    'includes/header.php';
?>

<main class="main">


    <?php
    $searchQuery = $_GET["barname"];
    echo "suchwort: ", $searchQuery, "<br>";

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
    echo "Connected successfully";

    // TODO search for any bar containing the search keyword
    $sql = "SELECT id, firstname, lastname FROM MyGuests";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    
    $conn->close();
    ?>
    
</main>


<?php include 'includes/footer.php' ?>