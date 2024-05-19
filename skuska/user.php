
<?php

class User {
    private $conn;
    private $table = 'login';

    public $id;
    public $username;
    public $password;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Check if username exists
    public function usernameExists() {
        $query = 'SELECT id, password FROM ' . $this->table . ' WHERE username = :username';

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':username', $this->username);
        $stmt->execute();

        if($stmt->rowCount() == 1) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $this->id = $row['id'];
            $this->password = $row['password'];
            return true;
        }

        return false;
    }

    // Create new user
    public function create() {
        $query = 'INSERT INTO ' . $this->table . ' SET username = :username, password = :password';

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':username', $this->username);
        $stmt->bindParam(':password', $this->password);

        if($stmt->execute()) {
            return true;
        }

        return false;
    }
}

?>
