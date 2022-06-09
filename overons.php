<!DOCTYPE html>
<html lang="NL">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/overons.css" />
    <link rel="icon" type="image/x-icon" href="afb/logo20x20.png">
    <title>Over ons</title>
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

    <div class="overons">
        <?php
        $handle = fopen("Teksten/overons.txt", "r");
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
        <img class="historie" src="afb/historie1.jpg" alt="historie" />
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