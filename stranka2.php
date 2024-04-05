<!DOCTYPE html>
<html lang="sk">
<head>

    <meta charset="UTF-8">
    <meta name="description" content="Slovensko">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/stranka2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Slovensko</title>

</head>

<body class="bg-info">

<?php include 'header.php'; ?>

    <main class="container text-center mt-5 ">
        <div id="D">
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
            <div class="banner mt-5">
                <h2>Vitam vás na mojej 2.stránke</h2>
                <p>Slovensko je nádherná krajina a tu nájdete o nej základné Informácie.</p>
            </div>



            <div class="ciarka"></div>
            <!-- informacia v alert -->
            <div class="alert alert-primary mt-3 role="alert>
                Po kliknutí na názvy sa vám zobrazia podrobné infomrácie 
              </div>
              <!-- obrazky  -->
            <h3 class="mt-5">Prírodné krásy Slovenska</h3>
            <div class="row">
                <div class="col-sm-4">
                    <img src="img/skraj.jpg" alt="krásy SK raja" class= " img-fluid mt-5" >
                </div>
                <div class="col-sm-4">
                    <img src="img/skraj1.jpg" alt="krásy SK raja" class=" img-fluid mt-5">
                </div>
                <div class="col-sm-4">
                    <img src="img/skraj2.jpg" alt="krásy SK raja" class=" img-fluid mt-5">
                </div>
            </div>
            <!-- zaciatok accordeonu -->
            <button class="accordion">Slovenský raj</button>
            <div class="panel">
            <p>Slovenský raj je horské pásmo na východnom Slovensku v oblasti Spiša a horného Gemera. Je považovaný za jednu z najkrajších prírodných oblastí Slovenska. Z geomorfologického hľadiska patrí do Spišsko-gemerského krasu a leží v severovýchodnej časti Slovenského rudohoria. Oblasti horského pásma Slovenského raja chráni Národný park Slovenský raj, ktorý je jedným z deviatich národných parkov na Slovensku.</p>
            </div>

    
                <div class="row">
                    <div class="col-sm-4">
                        <img src="img/vst.jpg" alt="Naše Vysoké Tatry" class= " img-fluid mt-5" >
                    </div>
                    <div class="col-sm-4">
                        <img src="img/vst1.jpg" alt="Naše Vysoké Tatry" class=" img-fluid mt-5">
                    </div>
                    <div class="col-sm-4">
                        <img src="img/vst2.jpg" alt="Naše Vysoké Tatry" class=" img-fluid mt-5">
                    </div>
                </div>
    
                <button class="accordion">Vysoke Tatry</button>
                <div class="panel">
                <p>Vysoké Tatry sú najvyššie pohorie na Slovensku a v Poľsku a sú zároveň jediným horstvom v týchto štátoch s alpským charakterom. Sú geomorfologickou časťou Východných Tatier a majú rozlohu 341 km² z toho 260 km² na Slovensku a 81 km² v Poľsku.</p>
                </div>
            

        </div>

    </main>

    <?php include 'footer.php'; ?>


    

        <script src="js/stranka2.js"></script>
</body>

</html>