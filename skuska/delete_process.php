<?php

require_once 'tourist_info.php';

class DeleteProcess extends TouristInfo {
    public function handleRequest() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = $_POST['id'];
            $this->deleteTouristInfo($id);
            header("Location: delete_success.php");
            exit();
        }
    }
}

// Initialize and handle request
$deleteProcess = new DeleteProcess();
$deleteProcess->handleRequest();
?>
