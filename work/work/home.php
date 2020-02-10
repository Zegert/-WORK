<?php 
require ('./includes/config.php');
// var_dump($_SESSION['ID']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@WORK</title>
    <link rel="stylesheet" href="./includes/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,900&display=swap" rel="stylesheet">
</head>
<body>
    <?php include('./includes/navbar_html.php'); ?>


    <main>
        <div id="container">
            <div id="toppicture">
                <img src="./images/backgroundpicture.jpg" alt="achtergrond foto" style="opacity: 0.4;">
                <h1>GET TO WORK</h1>
                <p>SHOWCASE WORK & GET INSPIRED @WORK</p>
            </div>

            <!-- Tussenkopjes -->
            <div class="tussenkop">
                <p style="font-weight:200">Find work</p><br>
                <p>Offer your services</p>
            </div>

            <div id="personen">
                <div class="persoon">
                    <img src="./images/persoon1.jpg" alt="anna">
                    <div class="persbeschrijving">
                        <p><b>Anna Vijverberg</b><br>Beroep: Boekhouding</p>
                    </div>
                </div>
                <div class="persoon">
                    <img src="./images/milan.jpg" alt="milan">
                    <div class="persbeschrijving">
                        <p><b>Milan Schouten</b><br>Beroep: Fotograaf</p>
                    </div>
                </div>
                <div class="persoon">
                    <img src="./images/michael.jpg" alt="michael">
                    <div class="persbeschrijving">
                        <p><b>Michael Dongen</b><br>Beroep: Fysiotherapeut</p>
                    </div>
                </div>
                <div class="persoon">
                    <img src="./images/eva.jpg" alt="eva">
                    <div class="persbeschrijving">
                        <p><b>Eva de Jong</b><br>Beroep: Model</p>
                    </div>
                </div>
                <div class="calltoaction">
                    <p>Get started</p>
                </div>
            </div>


            <div class="tussenkop">
                <p style="font-weight:400">Get inspired</p><br>
                <p>Create a portfolio</p>
            </div>

            <div id="personen">
                <div class="persoon">
                    <img src="./images/portfolio1.png" alt="portfolio1">
                </div>
                <div class="persoon">
                    <img src="./images/portfolio2.png" alt="portfolio2">
                </div>
                <div class="persoon">
                    <img src="./images/portfolio3.png" alt="portfolio3">
                </div>
                <div class="persoon">
                    <img src="./images/portfolio4.png" alt="portfolio4">
                </div>
                <div class="calltoaction">
                    <p>Get inspired</p>
                </div>
            </div>
        
        
        
        
        </div>
    </main>
</body>
</html>