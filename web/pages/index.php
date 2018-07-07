<?php 
    $page = 'index';
    include 'includes/header.php';
?>

<main>

    suchformular

    <form action="search-results.php" method="get">
        <label for="bar-search">Barsuche</label>
        <input id="bar-search" type="text" placeholder="such nach einer bar" name="barname">
        <button type="submit">Suche</button>
    </form>
    
</main>


<?php include 'includes/footer.php' ?>