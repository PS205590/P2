<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Fietsen.css" />
    <link rel="stylesheet" href="css/Fietsen2.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="icon" type="image/x-icon" href="afb/logo20x20.png">
    <title>Fietsen</title>
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
        <div id="form1">
            <button class="buttonStyle" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">
                <img class="fiets" src="afb/1.jpg" alt="fiets">
            </button>
            <p>Pelikaan Carry On Lady</p>
        </div>

        <div id="form2">
            <button class="buttonStyle" onclick="document.getElementById('id03').style.display='block'" style="width:auto;">
                <img class="fiets" src="afb/3.jpg" alt="fiets">
            </button>
            <p>Allegra voorwielmotor</p>
        </div>

        <div id="form3">
            <button class="buttonStyle" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">
                <img class="fiets" src="afb/2.jpg" alt="fiets">
            </button>
            <p>Gazelle Orange</p>
        </div>

        <div id="form4">
            <button class="buttonStyle" onclick="document.getElementById('id04').style.display='block'" style="width:auto;">
                <img class="fiets" src="afb/4.jpg" alt="fiets">
            </button>
            <p>Gazelle CityGo</p>
        </div>


    </div>


    <div id="id01" class="modal">

        <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="afb/1.jpg" class="avatar" alt="avatar">
            <div class="tekstcontainer">
                <p>Aandrijving Elektrisch <br>
                    geschikt voor zakelijk en prive <br>
                    Type Dames <br>
                    Transport<br>
                    Pelikaan<br>
                    Nieuw<br>
                    Kleur Zwart <br>
                    €769,00 <br>
                    28 Inch 53 cm <br>
                    3V V-Brakes</p>
            </div>
            <button class="btnwinkelwagen" onclick="window.location.href='winkelwagen.php?fiets=1&prijs=796,00&naam=Pelikaan'">
                <img class="btnwinkelwagen" src="afb/winkelwagen.png" alt="winkelwagen">
            </button>

        </div>



    </div>

    <div id="id02" class="modal">

        <div class="imgcontainer">
            <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="afb/3.jpg" alt="Avatar" class="avatar">
            <div class="tekstcontainer">
                <p>Aandrijving Elektrisch <br>
                    geschikt voor zakelijk en prive <br>
                    Type heren <br>
                    stad<br>
                    Gazelle<br>
                    Nieuw<br>
                    Kleur Blauw <br>
                    €2199,00 <br>
                    frameraat 53cm 1.66cm-1.77cm <br>

            </div>
            <button class="btnwinkelwagen" onclick="window.location.href='winkelwagen.php?fiets=3&prijs=2199,00&naam=GazelleOrange'">
                <img class="btnwinkelwagen" src="afb/winkelwagen.png" alt="winkelwagen">
            </button>
        </div>

        <div id="id03" class="modal">

            <div class="imgcontainer">
                <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
                <img src="afb/2.jpg" alt="Avatar" class="avatar">
                <div class="tekstcontainer">
                    <p> voorwielmotor Aandrijving Elektrisch <br>
                        geschikt voor zakelijk en prive <br>
                        Type Dames <br>
                        stad<br>
                        Stella<br>
                        Nieuw<br>
                        Kleur Zwart <br>
                        €999,00 <br>
                        frameraat S <br>
                        Lichaamslengte 1,62m - 1,73m</p>
                </div>
                <button class="btnwinkelwagen" onclick="window.location.href='winkelwagen.php?fiets=2&prijs=999,00&naam=Allegra'">
                    <img class="btnwinkelwagen" src="afb/winkelwagen.png" alt="winkelwagen">
                </button>
            </div>




        </div>

    </div>

    <div id="id04" class="modal">

        <div class="imgcontainer">
            <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="afb/4.jpg" alt="Avatar" class="avatar">
            <div class="tekstcontainer">
                <p>niet elektrisch <br>
                    geschikt voor zakelijk en prive <br>
                    Type Heren <br>
                    stad<br>
                    Gazelle<br>
                    Nieuw<br>
                    Kleur Zwart <br>
                    €679,00<br>
                    wielmaat 28 inches<br>

            </div>
            <button class="btnwinkelwagen" onclick="window.location.href='winkelwagen.php?fiets=4&prijs=679,00&naam=GazelleCityGo'">
                <img class="btnwinkelwagen" src="afb/winkelwagen.png" alt="winkelwagen">
            </button>
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
            <img id="fietser2" src="afb/footer_bike2.gif" alt="fietser2">
            <img id="fietser1" src="afb/footer_bike1.gif" alt="fietser">
        </div>
    </footer>

</body>

</html>