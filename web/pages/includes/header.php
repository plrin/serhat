<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bars und so</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="/dist/main.css" />
    <script src="/dist/main.js"></script>
</head>
<body>

<header>
    <nav class="nav">
        <ul class"nav__lvl1">
            <li class="lvl1__li <?php echo ($page == "index" ? "active" : "")?>">
                <a href="0#">home</a>
            </li>
            <li class="lvl1__li <?php echo ($page == "index2" ? "active" : "")?>">
                <a href="0#">new york</a>
            </li>
            <li class="lvl1__li <?php echo ($page == "index3" ? "active" : "")?>">
                <a href="0#">bars</a>
                <ul class="nav__lvl2">
                    <li class="lvl2__li <?php echo ($page == "bar1" ? "active" : "")?>">
                        <a href="bar1.php"> sub bar</a>
                    </li>
                    <li class="lvl2__li <?php echo ($page == "bar2" ? "active" : "")?>">
                        <a href="bar2.php">sub bar</a>
                    </li>
                </ul>
            </li>
        </ul>
    
    </nav>
</header>