<?php
// Importujeme triedu TouristInfo
require_once 'tourist_info.php';

// Overíme, či boli odoslané údaje z formulára
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Získame údaje z formulára
    $id = $_POST['id'];
    $new_location = $_POST['new_location'];
    $new_type = $_POST['new_type'];
    $new_info = $_POST['new_info'];

    // Vytvoríme objekt triedy TouristInfo
    $touristInfo = new TouristInfo();

    // Aktualizujeme turistické informácie v databáze
    $touristInfo->updateTouristInfo($id, $new_location, $new_type, $new_info);

    // Presmerujeme používateľa na stránku s výsledkom aktualizácie
    header("Location: update_success.php");
    exit();
}
?>
