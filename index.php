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
        <!-- banner s textom -->
            <div class="banner mt-5">
                <h2>Vitam vás na mojej 2.stránke</h2>
                <p>Slovensko je nádherná krajina a tu nájdete o nej základné Informácie.</p>
            </div>

            <!-- table -->
            <div class="container mt-5">
                <div class="text-center">
                    <h1>Základné Informácie</h1>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered text-center">
                        <tbody>
                            <tr>
                                <th class="text-right">Hlavné mesto</th>
                                <td class="text-left">Bratislava</td>
                            </tr>
                            <tr>
                                <th class="text-right">Počet obyvateľov</th>
                                <td class="text-left">5 449 270</td>
                            </tr>
                            <tr>
                                <th class="text-right">Rozloha</th>
                                <td class="text-left">49 036 km²</td>
                            </tr>
                            <tr>
                                <th class="text-right">Mena</th>
                                <td class="text-left">Euro</td>
                            </tr>
                            <tr>
                                <th class="text-right">Jazyk</th>
                                <td class="text-left">Slovenský</td>
                            </tr>
                            <tr>
                                <th class="text-right">Náboženstvo</th>
                                <td class="text-left">Kresťanské</td>
                            </tr>
                            <tr>
                                <th class="text-right">Vznik</th>
                                <td class="text-left">1.1.1993</td>
                            </tr>
                            <tr>
                                <th class="text-right">Prezident</th>
                                <td class="text-left">Zuzana Čaputová</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>            

        </div>

    </main>

    <!-- zaciatok footer -->
    <?php include 'footer.php'; ?>



    

<script src="js/index.js"></script>
</body>

</html>