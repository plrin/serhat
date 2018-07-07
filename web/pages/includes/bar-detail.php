<?php

// echo 'this page contains the bar details from the db<br>';

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
// echo "Connected successfully";

// sql queries declartions
$barQuery = "SELECT * from bar WHERE name = '$barName'"; 
$descriptionQuery = "SELECT bar.*, description.Beschreibung FROM bar, description  WHERE bar.name = '$barName' AND bar.PLZ = '$barPLZ' AND bar.name = description.name AND bar.PLZ = description.PLZ";
$employeeQuery = "SELECT name, vorname FROM employee WHERE bar = '$barName' AND PLZ = '$barPLZ'";

// start queries
$result = $conn->query($barQuery);

if ($result->num_rows > 0) {
    $item = $result->fetch_assoc();
    $name = $item['Name'];

    echo '<h1 class="bar-detail__headline">'.$name.'</h1>';

?>
<div class="bar-detail__info">
    <h2 class="bar-detail__subline">Kontaktinformationen</h2>

<?php
// output data contact info of bar
echo '<table class="bar-detail__table">';
    echo '<tr>';
        echo '<th>Adresse: </th>';
        echo '<td>', $item['Straße'], ' ', $item['Hausnummer'],', ', $item['PLZ'],' ', $item['Ort'], '</td>';
    echo '</tr>';
        echo '<th>Inhaber: </th>';
        echo '<td>', $item['Inhaber'], '</td>';
    echo '</tr>';
echo '</table>';
} else {
    echo "no such bar";
}
?>

<h2 class="bar-detail__subline">Beschreibung</h2>

<?php
// BAR DESCRIPTION

$description = $conn->query($descriptionQuery);
if($description->num_rows > 0) {
    echo '<p class="bar-detail__description">';
    echo $description->fetch_assoc()["Beschreibung"];
    echo '</p>';
} else {
    echo "no description available";
}
?>

<!-- employees -->
<h2 class="bar-detail__subline">Mitarbeiter</h2>

<?php
$employees = $conn->query($employeeQuery);

if ($employees->num_rows > 0) {

// output data contact info of bar
    echo '<table class="bar-detail__table">';
    echo '<tr>';
    echo '<th>Name</th>';
    echo '<th>Vorname</th>';
    echo '</tr>';
    while($employee = $employees->fetch_assoc()) {
        echo '<tr>';
            echo '<td>', $employee['name'], '</td>';
            echo '<td>', $employee['vorname'], '</td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo "no such bar";
}


$conn->close();

?>

</div>