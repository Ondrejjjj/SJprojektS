<?php

require_once 'Database.php';

class TouristInfo extends Database {
    
    public function createTouristInfo($location, $type, $info) {
        try {
            $sql = "INSERT INTO tourist_info (location, type, info) VALUES (:location, :type, :info)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->bindParam(':location', $location);
            $stmt->bindParam(':type', $type);
            $stmt->bindParam(':info', $info);
            $stmt->execute();
        } catch(PDOException $e) {
            echo 'Create Error: ' . $e->getMessage();
        }
    }

    public function readTouristInfo() {
        try {
            $sql = "SELECT * FROM tourist_info";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            echo 'Read Error: ' . $e->getMessage();
        }
    }

    public function updateTouristInfo($tourist_info_id, $new_location, $new_type, $new_info) {
        try {
            $sql = "UPDATE tourist_info SET location = :location, type = :type, info = :info WHERE id = :id";
            $stmt = $this->connect()->prepare($sql);
            $stmt->bindParam(':location', $new_location);
            $stmt->bindParam(':type', $new_type);
            $stmt->bindParam(':info', $new_info);
            $stmt->bindParam(':id', $tourist_info_id);
            $stmt->execute();
        } catch(PDOException $e) {
            echo 'Update Error: ' . $e->getMessage();
        }
    }

    public function deleteTouristInfo($tourist_info_id) {
        try {
            $sql = "DELETE FROM tourist_info WHERE id = :id";
            $stmt = $this->connect()->prepare($sql);
            $stmt->bindParam(':id', $tourist_info_id);
            $stmt->execute();
        } catch(PDOException $e) {
            echo 'Delete Error: ' . $e->getMessage();
        }
    }
}

?>
