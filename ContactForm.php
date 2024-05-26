<?php
include_once 'skuska/database.php';

class ContactForm {
    private $db;

    public function __construct() {
        $database = new Database();
        $this->db = $database->connect();
    }

    public function saveContact($name, $subject, $message) {
        $query = 'INSERT INTO kontaktny_formular (user_name, predmet, Sprava) VALUES (:name, :subject, :message)';
        $stmt = $this->db->prepare($query);

        // Väzby parametrov
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':subject', $subject);
        $stmt->bindParam(':message', $message);

        // Vykonanie dotazu
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
?>
