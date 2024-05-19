<?php
class Session {
    public function __construct() {
        session_start();
    }

    public function destroy() {
        $_SESSION = array();
        session_destroy();
    }

    public function isLoggedIn() {
        return isset($_SESSION['username']);
    }

    public function redirect($location) {
        header("Location: " . $location);
        exit;
    }
}
?>
