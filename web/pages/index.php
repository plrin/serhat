<?php 
    $page = 'index';
    include 'includes/header.php';
?>

<main class="main">

    <h1 class="main__headline">
        Bar Featurer
    </h1>
    <h2 class="main__subline">
        Wir featurern Bars und ihre Getränke
    </h2>

    <div class="main__search">
        <form action="search-results.php" method="get">
            <p>
                Suche nach einer und schau welche Getränke sie hat.
            </p>
            <input id="bar-search" type="text" placeholder="Gib einen Barnamen ein" name="barname"><br>
            <button type="submit" class="main__submit">Suche</button>
        </form>
    </div>
    
</main>


<?php include 'includes/footer.php' ?>