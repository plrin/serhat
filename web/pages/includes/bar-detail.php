<?php

    echo 'i contain the bar details from the db';

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
    $result = $conn->query($barQuery);

    if ($result->num_rows > 0) {
        // output data of each row
        echo '<table><tr>';
        echo '<th>name</th>';
        echo '<th>PLZ</th>';
        echo '<th>straße</th>';
        echo '<th>PLZ</th>';
        echo '<th>hausnummer</th>';
        echo '<th>inhaber</th>';
        echo '</tr>';
        while($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<th>', $row['Name'], '</th>';
            echo '<th>', $row['PLZ'], '</th>';
            echo '<th>', $row['Ort'], '</th>';
            echo '<th>', $row['Straße'], '</th>';
            echo '<th>', $row['Hausnummer'], '</th>';
            echo '<th>', $row['Inhaber'], '</th>';
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo "0 results";
    }


    $conn->close();

?>

