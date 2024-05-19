<?php
// Importujeme triedu TouristInfo
require_once 'tourist_info.php';

// Overíme, či boli odoslané údaje z formulára
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Získame ID turistickej informácie na vymazanie
    $id = $_POST['id'];

    // Vytvoríme objekt triedy TouristInfo
    $touristInfo = new TouristInfo();

    // Vymažeme turistické informácie z databázy
    $touristInfo->deleteTouristInfo($id);

    // Presmerujeme používateľa na stránku s výsledkom vymazania
    header("Location: delete_success.php");
    exit();
}
?>
