<?php

require_once 'tourist_info.php'; // Importujeme triedu TouristInfo

// Kontrola, či sú údaje z formulára zaslané pomocou POST metódy
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $location = $_POST["location"];
    $type = $_POST["type"];
    $info = $_POST["info"];

    // Vytvoríme objekt triedy TouristInfo
    $touristInfo = new TouristInfo();

    // Voláme metódu pre vloženie údajov do databázy
    $touristInfo->createTouristInfo($location, $type, $info);

    // Presmerujeme používateľa na inú stránku alebo vypíšeme potvrdenie
    header("Location: success.php");
    exit();
}

?>
