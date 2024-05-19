<!DOCTYPE html>
<html>
<head>
    <title>Čítať turistické informácie</title>
</head>
<body>

<h2>Turistické informácie:</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Lokalita</th>
        <th>Typ</th>
        <th>Info</th>
    </tr>

    <?php
    // Importujeme triedu TouristInfo
    require_once 'tourist_info.php';

    // Vytvoríme objekt triedy TouristInfo
    $touristInfo = new TouristInfo();

    // Získame všetky turistické informácie z databázy
    $informations = $touristInfo->readTouristInfo();

    // Vykreslíme každý riadok tabuľky s informáciami
    foreach ($informations as $info) {
        echo "<tr>";
        echo "<td>" . $info['id'] . "</td>";
        echo "<td>" . $info['location'] . "</td>";
        echo "<td>" . $info['type'] . "</td>";
        echo "<td>" . $info['info'] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

<br>

<!-- Tlačidlo na vrátenie na stránku tourist_info.php -->
<a href="info.php">Späť na formulár</a>

</body>
</html>
