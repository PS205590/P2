<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/contact.css" />
    <link rel="icon" type="image/x-icon" href="afb/logo20x20.png">
    <title>Contact</title>
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


    <div class="container">

        <div class="form">
            <form>
                <div class="wrap">
                    <label for="fname">Voornaam:</label>
                    <input type="text" id="fname">
                </div>
                <div class="wrap">
                    <label for="lname">Achternaam:</label>
                    <input type="text" id="lname">
                </div>
                <div class="wrap">
                    <label for="email">Emailadres:</label>
                    <input type="text" id="email">
                </div>
                <div class="wrap">
                    <label for="vraag">Vul uw vraag in:</label>
                    <textarea id="vraag"></textarea>
                </div>
                <input type="submit" value="Verstuur">
            </form>
        </div>

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2485.123411713059!2d5.593368951629922!3d51.4742489795297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf2415daeb5e76b17!2zNTHCsDI4JzI3LjMiTiA1wrAzNSc0NC4wIkU!5e0!3m2!1snl!2snl!4v1649409068513!5m2!1snl!2snl" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
        </div>

        <div class="adres">
            <?php
            $handle = fopen("Teksten/adres.txt", "r");
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