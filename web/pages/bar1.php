<?php 
    $page = 'bar1'; 
    include 'includes/header.php';
?>

<main>

    this is the bar1 page<br>

    <?php 
    $barQuery = 'SELECT * from serhat'; 
    require 'includes/bar-detail.php';
?>
    
</main>


<?php include 'includes/footer.php' ?>