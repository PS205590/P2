<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/fietsverhuur.css" />
    <link rel="icon" type="image/x-icon" href="afb/logo20x20.png">
    <title>Fietsverhuur</title>
    <script src="https://kit.fontawesome.com/5388b4be0b.js" crossorigin="anonymous"></script>
    <script src="main.js"></script>
    <link rel="stylesheet" href="css/checkout.css" />
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
        <div class="foto">
            <img src="afb/verhuur1.jpg" alt="verhuur" />
        </div>
        <div class="tabel">
        <table>
        <?php
        $counter = 0;
        $handle = fopen("Teksten/fietsverhuur.txt", "r");
        if ($handle) {
          while (($line = fgets($handle)) !== false) {
            // process the line read.
            $arr = explode(':€ ', $line);
            $arr1 = explode('/', $arr[1]);
            $arr2 = explode(':', $arr1[1]);
            $dag = $arr2[1];
            $prijs = $arr1[0];

            $string = $arr2[1];
            $int_value = intval($string);

            $floatValue = floatval($arr1[0]);
            (number_format($floatValue / $int_value, 2));
            // var_dump(round($prijs, 2, PHP_ROUND_HALF_UP));
            // var_dump(round(str_replace(',', '.', $prijs), 2));
            // ound(int|float $prijs, int $precision = 0, int $mode = PHP_ROUND_HALF_UP): float
            // $floatValue / $string;

            echo '<tr>';
            echo '<td>';
            echo '<input class="checkbox" data-naamfiets="' . $arr[0] . ' " data-prijs="' . $floatValue / $int_value . '" data-dag="per dag" type="checkbox" id="tcb' . $counter . '" onclick="checkbox(' . $counter . ')"><br>';
            echo '</td>';
            echo '<td>';
            echo $arr[0] . " €" . (number_format($floatValue / $int_value, 2)) . " per dag";
            echo ' </td>';
            echo '</tr>';
            $counter++;
          }
          fclose($handle);
        }
        ?>
      </table>
            <button onclick="checkout()" id="checkout2">Huur de fietsen</button>
        </div>

        <div class="foto2">
            <img src="afb/verhuur2.jpg" alt="fiets" />
        </div>
    </div>

    <div id="id01">

        <form class="checkout-content animate" action="action_page.php" method="post">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span>
            <div class="row">
                <div class="col-75">
                    <div class="container1">

                            <div class="row">
                                <div class="col-50">
                                    <h3>Billing Address</h3>
                                    <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                                    <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
                                    <label for="email"><i class="fa fa-envelope"></i> Email</label>
                                    <input type="text" id="email" name="email" placeholder="john@example.com">
                                    <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                                    <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
                                    <label for="city"><i class="fa fa-institution"></i> City</label>
                                    <input type="text" id="city" name="city" placeholder="New York">

                                    <div class="row">
                                        <div class="col-50">
                                            <label for="state">State</label>
                                            <input type="text" id="state" name="state" placeholder="NY">
                                        </div>
                                        <div class="col-50">
                                            <label for="zip">Zip</label>
                                            <input type="text" id="zip" name="zip" placeholder="10001">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-50">
                                    <h3>Payment</h3>
                                    <label for="fname">Accepted Cards</label>
                                    <div class="icon-container">
                                        <i class="fa fa-cc-visa" style="color:navy;"></i>
                                        <i class="fa fa-cc-amex" style="color:blue;"></i>
                                        <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                        <i class="fa fa-cc-discover" style="color:orange;"></i>
                                    </div>
                                    <label for="cname">Name on Card</label>
                                    <input type="text" id="cname" name="cardname" placeholder="John More Doe">
                                    <label for="ccnum">Credit card number</label>
                                    <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                                    <label for="expmonth">Exp Month</label>
                                    <input type="text" id="expmonth" name="expmonth" placeholder="September">
                                    <div class="row">
                                        <div class="col-50">
                                            <label for="expyear">Exp Year</label>
                                            <input type="text" id="expyear" name="expyear" placeholder="2018">
                                        </div>
                                        <div class="col-50">
                                            <label for="cvv">CVV</label>
                                            <input type="text" id="cvv" name="cvv" placeholder="352">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <input type="submit" value="Continue to checkout" class="btn">
                    </div>
                </div>
                <div class="col-25">
                    <div class="container1">
                        <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b></b></span></h4>
                        <p>Total <span class="totalprice" style="color:black"><b></b></span></p>
                        <div class="mijn-winkelwagen">

                        </div>
                    </div>
                </div>
            </div>
        </form>
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