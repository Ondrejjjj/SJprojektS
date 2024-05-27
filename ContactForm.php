<?php
include_once 'skuska/database.php';

class ContactForm extends Database {
    public function saveContact($name, $subject, $message) {
        $query = 'INSERT INTO kontaktny_formular (user_name, predmet, Sprava) VALUES (:name, :subject, :message)';
        $stmt = $this->connect()->prepare($query);

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
