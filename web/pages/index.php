<?php 
    $page = 'index';
    include 'includes/header.php';
?>

<main class="main">
    <div class="main__content">
        <h1 class="main__headline">
            Hamburg Bar Guide
        </h1>
        <p>
            Hamburg - die schönste Stadt Deutschlands. Das wissen nicht nur Hamburger, sondern auch Touristen, die am Ende Ihrer Tour unsere schöne Stadt verlassen. Vom Hamburger Hafen, der Speicherstadt und den Fischmarkt, über den Rathausplatz, der Alsterpromenade und das Gängeviertel bis hin zur berühmt berüchtigten Reeperbahn - das „Tor zu Welt“ hat Sehenswürdigkeiten bis zum abwinken. Doch auch an Bars und Restaurant hat die Stadt einiges zu bieten. 
        </p>
        <p>
            Ich zeige euch in meinem Guide meine Top Favoriten und Geheimtipps, damit ihr es bei eurer nächsten Bar-Tour etwas einfacher habt.
        </p>
        <p>
            Viel Spaß
        </p>
    </div>

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