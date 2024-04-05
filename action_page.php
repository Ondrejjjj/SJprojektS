<?php
// Pripojenie k databáze
$sname= "localhost";
$unmae= "root";
$password = "";
$db_name = "svkpou"; // Názov vášej databázy
$conn = mysqli_connect($sname, $unmae, $password, $db_name);

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
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
