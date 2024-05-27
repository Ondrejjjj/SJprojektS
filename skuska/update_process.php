<?php

require_once 'tourist_info.php'; // Importujeme triedu TouristInfo

class UpdateHandler extends TouristInfo {
    public function handlePostRequest() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Získame údaje z formulára
            $id = $_POST['id'];
            $new_location = $_POST['new_location'];
            $new_type = $_POST['new_type'];
            $new_info = $_POST['new_info'];

            // Aktualizujeme turistické informácie v databáze pomocou metódy z dedenej triedy
            $this->updateTouristInfo($id, $new_location, $new_type, $new_info);

            // Presmerujeme používateľa na stránku s výsledkom aktualizácie
            header("Location: update_success.php");
            exit();
        }
    }
}

// Vytvoríme objekt pre spracovanie aktualizácie turistických informácií
$updateHandler = new UpdateHandler();
$updateHandler->handlePostRequest();

?>
