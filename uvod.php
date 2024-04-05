<?php
// Začnite session
session_start();

// Kontrola, či je používateľ už prihlásený
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    // Ak je používateľ už prihlásený, presmerujte ho na hlavnú stránku
    header("Location: index.php");
    exit;
}

// Kontrola, či bol odoslaný formulár
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pripojenie k databáze
    $sname = "localhost";
    $username = "root";
    $password = "";
    $db_name = "svkpou"; 
    
    // Vytvorenie pripojenia
    $conn = new mysqli($host, $username_db, $password_db, $database);

    // Kontrola pripojenia
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Spracovanie prihlasovacích údajov
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Overenie údajov v databáze
    $sql = "SELECT id, username, password FROM users WHERE username = '$username'";
    $result = $conn->query($sql);
    
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Overenie úspešné, nastavenie session
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header("Location: index.php");
            exit;
        } else {
            // Overenie neúspešné, zobrazenie chybovej správy
            $login_err = "Nesprávne prihlasovacie údaje.";
        }
    } else {
        // Overenie neúspešné, zobrazenie chybovej správy
        $login_err = "Nesprávne prihlasovacie údaje.";
    }
    
    // Zatvorenie pripojenia k databáze
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prihlásenie</title>
</head>
<body>

<h2>Prihlásenie</h2>
<!-- Formulár na prihlásenie -->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div>
        <label for="username">Používateľské meno:</label>
        <input type="text" id="username" name="username">
    </div>
    <div>
        <label for="password">Heslo:</label>
        <input type="password" id="password" name="password">
    </div>
    <div>
        <button type="submit">Prihlásiť sa</button>
    </div>
</form>

<!-- Zobrazenie chybovej správy -->
<?php if (!empty($login_err)): ?>
    <p><?php echo $login_err; ?></p>
<?php endif; ?>

</body>
</html>
