<?php

require_once 'tourist_info.php'; // Importujeme triedu TouristInfo

class InsertHandler {
    private $touristInfo;

    public function __construct() {
        $this->touristInfo = new TouristInfo();
    }

    public function handlePostRequest() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $location = $_POST["location"];
            $type = $_POST["type"];
            $info = $_POST["info"];

            $this->touristInfo->createTouristInfo($location, $type, $info);

            // Presmerujeme používateľa na inú stránku alebo vypíšeme potvrdenie
            header("Location: success.php");
            exit();
        }
    }
}

// Vytvoríme objekt pre spracovanie vkladania údajov
$insertHandler = new InsertHandler();
$insertHandler->handlePostRequest();

?>
