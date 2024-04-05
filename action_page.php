<?php
// Pripojenie k databáze
$sname = "localhost";
$username = "root";
$password = "";
$db_name = "svkpou"; // Názov vašej databázy
$conn = mysqli_connect($sname, $username, $password, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Spracovanie údajov z formulára
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uname = $_POST['uname'];
    $psw = $_POST['psw'];

    // Vloženie údajov do databázy
    $sql = "INSERT INTO login (meno, heslo, `pouzivatelove meno`) VALUES ('$uname', '$psw', '$uname')";

    if (mysqli_query($conn, $sql)) {
        echo "Records inserted successfully.";

        // Presmerovanie na prihlasovaciu stránku po úspešnej registrácii
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
