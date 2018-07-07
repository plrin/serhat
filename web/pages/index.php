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
        <form action="bar-search.php" method="get" data-form="search" data-result-target="bar">
            <p>
                Suche nach einer Bar und schau welche Getränke sie hat.
            </p>
            <input id="bar-search" type="text" placeholder="Gib einen Barnamen ein" name="barName"><br>
            <button type="submit" class="main__submit">Suche</button>
        </form>
    </div>

    <div class="main-result" data-result="bar">
        <!-- dynamic content -->
    </div>

    <div class="main__search">
        <form action="drink-search.php" method="get" data-form="search" data-result-target="drink">
            <p>
                Suche nach einem Getränk und erhalte ihre Getränke und wo du sie findest.
            </p>
            <input id="drink-search" type="text" placeholder="Gib einen Drinknamen ein" name="drinkName"><br>
            <button type="submit" class="main__submit">Suche</button>
        </form>
    </div>

    <div class="main-result" data-result="drink">
        <!-- dynamic content -->
    </div>
    
</main>


<?php include 'includes/footer.php' ?>