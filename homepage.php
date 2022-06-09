<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css"/>
    <link rel="stylesheet" href="css/homepage.css"/>
    <link rel="icon" type="image/x-icon" href="afb/logo20x20.png">
    <title>Home pagina</title>
    <script src="https://kit.fontawesome.com/5388b4be0b.js" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</head>

<body>
    <header>
        <img class="logo" src="afb/logo.png" alt="bedrijfslogo" />
        <h1 id="titel">De Fluitende Fietser</h1>
        <img class="logo" src="afb/zoek.png" alt="zoeklogo" />
        <form>
            <input id="search" name="search" aria-label="search">
        </form>
    </header>

    <nav>
        <a href="homepage.php" class="active">Home</a>
        <a href="Fietsen.php">Fietsen</a>
        <a href="fietsverhuur.php">Verhuur</a>
        <a href="contact.php">Contact</a>
        <a href="overons.php">Over ons</a>
    </nav>

    <div class="maingrid">
        <div class="tekst">
            <?php
            $handle = fopen("Teksten/welkom.txt", "r");
            if ($handle) {
                while (($line = fgets($handle)) !== false) {
                    // process the line read.
                    echo $line . "<br/>";
                }
                fclose($handle);
            } else {
                // error opening the file.
            }
            ?>
        </div>


        <div id="slider">
            <ul id="slideWrap">
                <li><img src="afb/sfeer1.jpg" alt="Sfeerfoto"></li>
                <li><img src="afb/sfeer2.jpg" alt="Sfeerfoto2"></li>
                <li><img src="afb/sfeer3.jpg" alt="Sfeerfoto3"></li>
                <li><img src="afb/sfeer4.jpg" alt="Sfeerfoto4"></li>
                <li><img src="afb/sfeer5.jpg" alt="Sfeerfoto5"></li>
            </ul>
            <a id="prev" href="#">&#8810;</a>
            <a id="next" href="#">&#8811;</a>

        </div>

        <div class="openingstijden">
            <?php
            $handle = fopen("Teksten/openingstijden.txt", "r");
            if ($handle) {
                while (($line = fgets($handle)) !== false) {
                    // process the line read.
                    echo $line . "<br/>";
                }
                fclose($handle);
            } else {
                // error opening the file.
            }
            ?>
            <br />
            <?php
            // De openingstijden in een Array
            $openHours = array(
                // Gesloten op zondag.
                1 => array('12:30', '18:00'), // Maandag
                2 => array('08:30', '18:00'), // Dinsdag
                3 => array('08:30', '18:00'), // Woensdag
                4 => array('08:30', '18:00'), // Donderdag
                5 => array('08:30', '19:00'), // Vrijdag
                6 => array('09:00', '17:00'), // Zaterdag
            );

            $open = false; // Tracker om te kijken of het wel/niet open is.

            // current day and time of the week, you can insert custom values here to test functionality
            $weekDay = date('w'); // current day of the week
            $currentTime =  date('H:i'); // current time

            // check if the opening day is defined and the current time is within the opening time interval on that day
            if (isset($openHours[$weekDay]) && $openHours[$weekDay][0] <= $currentTime && $currentTime <= $openHours[$weekDay][1]) {
                $open = true;
            }

            // Kijken of we open zijn:
            if ($open) {
            ?><p>Wij zijn op dit moment geopend</p><?php
                                                } else {
                                                    ?><p>Wij zijn op dit moment niet geopend</p>
            <?php
                                                }
            ?>

        </div>
    </div>
    <footer>
        <a href="overons.php">Over ons</a>
        <a href="https://www.bovag.nl/BovagWebsite/media/BovagMediaFiles/Downloads/Garantie%20en%20voorwaarden/Algemene-voorwaarden-BOVAG-tweewielerbedrijven-april-2018.pdf">Algemene voorwaarden</a>
        <a>info@fluitendefietser.nl</a>
        <a href="https://www.facebook.com/Rikbrandenburg" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a>KVK: 88599665 | BTW NL999888492Z09</a>
        <a>©2022 - De Fluitende Fietser</a>
        <div class="Animatie">
            <img id="fietser1" src="afb/footer_bike1.gif" alt="fietser">
            <img id="fietser2" src="afb/footer_bike2.gif" alt="fietser2">
        </div>
    </footer>

</body>
</html>