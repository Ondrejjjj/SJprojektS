<?php
// Začnite session
session_start();

// Odhlásenie používateľa odstránením všetkých údajov relácie
$_SESSION = array();

// Zrušenie relácie
session_destroy();

// Presmerovanie na domovskú stránku
header("location: index.php");
exit;
?>
