<?php
// Začnite session
session_start();

// Kontrola, či je používateľ prihlásený
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Ak používateľ nie je prihlásený, presmerujte ho na prihlasovaciu stránku
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vitajte</title>
</head>
<body>
    <h1>Vitajte, <?php echo $_SESSION['username']; ?>!</h1>
    <p>Toto je vaša vitajúca stránka.</p>
    <p><a href="/SJSlovensko/SJprojektS/index.php">Prejsť na hlavnú stránku</a></p>
</body>
</html>
