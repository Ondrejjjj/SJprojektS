<?php
// Začnite session
session_start();

// Kontrola, či je používateľ prihlásený
if (!isset($_SESSION['username'])) {  // Check after session starts
    header("Location: /SJSlovensko/SJprojektS/skuska/login.php"); // Presmerovanie na prihlasovaciu stránku, ak používateľ nie je prihlásený
    exit();
}
?>

<!DOCTYPE html>
<html lang="sk">
<head>

    <meta charset="UTF-8">
    <meta name="description" content="Slovensko">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Slovensko</title>

</head>

<body class="bg-info">

<?php include 'header.php'; ?>

    <main class="container text-center mt-5 ">
        <div id="I">
            <div class="uvod">
                <h1>Slovensko</h1>
                <h2>Klenot strednej Európy</h2>
            </div>
            <div class="row">
            <div class="col-sm-4">
                <img src="img/vlajocka.jpg" alt="vlajka SR" class= " img-fluid mt-5" >
            </div>
            <div class="col-sm-4">
                <img src="img/map.png" alt="mapa SR" class=" img-fluid mt-5">
            </div>
            <div class="col-sm-4">
                <img src="img/ba.jpg" alt="Hlavné mesto SR" class=" img-fluid mt-5">
            </div>
            </div>
            <!-- informacie o SLovensku -->
        
            <div class="container mt-5">
                <div class="text-center">
                    <h1>História Slovenska</h1>
                </div>
                <p>Prvým štátnym útvarom na väčšine územia Slovenska bolo Nitrianske kniežatstvo, ktoré sa roku 833 pripojilo k Veľkej Morave. V roku 862 veľkomoravský panovník Rastislav požiadal Byzanciu o kresťanských misionárov, byzantský cisár Michal III. na Veľkú Moravu poslal misiu vedenú solúnskymi bratmi Konštantínom (mníšskym menom sv. Cyril) a sv. Metodom, ktorí zostavili písmo hlaholiku, preložili Sväté písmo, bohoslužobné texty a ďalšie knihy do staroslovienčiny a pomáhali organizovať cirkevnoprávne pomery na Veľkej Morave.</p>
            <div class="ciarka"></div>
            <p class="mt-3">Po zániku Veľkomoravskej ríše vtedajšie územie Slovenska ovládli Maďari (koniec 9. storočia), ktorí sa v tom čase presídlili do strednej Európy. V polovici 10. storočia postupne vznikol nový feudálny štát Uhorské kráľovstvo (Uhorsko). Založila ho síce pôvodom maďarská dynastia Arpádovcov, ale krajina zostávala mnohonárodnostná a mnohojazyčná, jazykom šľachty a kráľovského dvora bola latinčina. Po bitke pri Moháči roku 1526 sa Slovensko a západné Uhry stali súčasťou habsburskej ríše. V rokoch 1540-1541 Uhorskú nížinu obsadili Turci a juh Slovenska bol začlenený do Osmanskej ríše.</p>
            <div class="ciarka"></div>
            <p class="mt-3">Dlho trvajúce vojny s Osmanskou ríšou na dlhšiu dobu ukončil v roku 1711 Satmársky mier. Najznámejším národným hrdinom, ktorého nájdeme v slovenskej mytológii z tohto obdobia, je zbojnícky kapitán Juraj Jánošík (1688 - 1713) z Terchovej. Legenda hovorí, že bohatým bral a chudobným dával.</p>
            <div class="ciarka"></div>
            
            <p class="mt-3">V polovici 19. storočia sa do popredia dostáva tzv. štúrovská generácia. Roku 1843 kodifikoval Ľudovít Štúr spisovnú slovenčinu na základe stredoslovenského nárečia, ktorá je s malými úpravami používaná dodnes. Štúrovci viedli boj za slovenskú svojbytnosť a právo sebaurčenia Slovákov. V revolúcii z rokov 1848 - 1849 bolo vyhlásené Autonómne Slovensko v rámci Uhorska a Slováci sa pridali na stranu Rakúšanov, aby sa oddelili od Uhorska ako samostatná časť Rakúskej monarchie, čo sa im žiaľ nepodarilo a slovenská samospráva v roku 1849 zanikla.</p>
            <div class="mt-3">
                <!-- mensia tabulka -->
            <div class="ciarka"></div>
                <div class="container text-center">
                <h2>Dôležité roky</h2>
                <ul>
                    <li>Mier s Osmanskou ríšou (1711)</li>
                    <li>Pripojenie k Veľkej Morave (833)</li>
                    <li>Juraj Janosik (1688 - 1713)</li>
                </ul>
            </div>
                </div>

                <!-- zaciatok kontainer -->
            <div class="container">

                <div class="mySlides">
                  <div class="numbertext">1 / 6</div>
                    <img src="img/vst.jpg" style="width:100%">
                </div>
              
                <div class="mySlides">
                  <div class="numbertext">2 / 6</div>
                    <img src="img/vst1.jpg" style="width:100%">
                </div>
              
                <div class="mySlides">
                  <div class="numbertext">3 / 6</div>
                    <img src="img/vst2.jpg" style="width:100%">
                </div>
              
                <div class="mySlides">
                  <div class="numbertext">4 / 6</div>
                    <img src="img/mrs.jpg" style="width:100%">
                </div>
              
                <div class="mySlides">
                  <div class="numbertext">5 / 6</div>
                    <img src="img/map.png" style="width:100%">
                </div>
              
                <div class="mySlides">
                  <div class="numbertext">6 / 6</div>
                    <img src="img/skusme.jpg" style="width:100%">
                </div>
              

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
              
                
                <div class="caption-container">
                  <p id="caption"></p>
                </div>
              
        
                <!-- odkaz na stranku -->
            <div class="text-center mt-5">
                <a href="https://european-union.europa.eu/principles-countries-history/country-profiles/slovakia_sk" target="_blank" class="btn btn-primary">Odkaz na stranku o Slovensku v EU</a>
            </div>

        </div>

            

        </div>

    </main>
    <?php include 'footer.php'; ?>
    



    
    <script src="js/stranka1.js"></script>
</body>

</html>