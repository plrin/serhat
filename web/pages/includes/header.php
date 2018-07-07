<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bars und so</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../dist/main.css" />
</head>
<body>

<header class="header">
    <figure class="header__figure">
        <img src="../dist/images/blur-city.jpg" alt="" class="header__image">
    </figure>
    <nav class="nav">
        <ul class="nav__lvl1">
            <li class="lvl1__li <?php echo ($page == "index" ? "active" : "")?>">
                <a href="index.php">home</a>
            </li>
            <li class="lvl1__li has--sub <?php echo ($page == "index3" ? "active" : "")?>">
                <a href="#0">bars</a>
                <ul class="nav__lvl2">
                    <li class="lvl2__li <?php echo ($page == "chakra" ? "active" : "")?>">
                        <a href="chakra.php">Chakra</a>
                    </li>
                    <li class="lvl2__li <?php echo ($page == "berliner" ? "active" : "")?>">
                        <a href="berliner-betrueger.php">Berliner Betrüger</a>
                    </li>
                    <li class="lvl2__li <?php echo ($page == "skyline" ? "active" : "")?>">
                        <a href="skyline-bar-20up.php">Skyline Bar 20up</a>
                    </li>
                    <li class="lvl2__li <?php echo ($page == "bar-decaio" ? "active" : "")?>">
                        <a href="bar-dacaio-hamburg.php">Bar DaCaio Hamburg</a>
                    </li>
                    <li class="lvl2__li <?php echo ($page == "le-lion" ? "active" : "")?>">
                        <a href="le-lion-bar-de-paris.php">Le Lion Bar de Paris</a>
                    </li>
                    <li class="lvl2__li <?php echo ($page == "tower-bar" ? "active" : "")?>">
                        <a href="tower-bar.php">Tower Bar</a>
                    </li>
                </ul>
            </li>
        </ul>
    
    </nav>
</header>