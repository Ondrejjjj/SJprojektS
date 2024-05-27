<!DOCTYPE html>
<html>
<head>
    <title>Formulár pre zadávanie turistických informácií</title>
</head>
<body>

<h2>Zadajte turistické informácie:</h2>

<form action="insert.php" method="post">
    <label for="location">Lokalita:</label><br>
    <input type="text" id="location" name="location"><br>
    <label for="type">Typ:</label><br>
    <input type="text" id="type" name="type"><br>
    <label for="info">Info:</label><br>
    <textarea id="info" name="info"></textarea><br><br>
    <input type="submit" value="Vložiť">
</form>

<br>

<!-- Tlačidlo pre čítanie informácií -->
<a href="read.php"><button>Čítať informácie</button></a>

<!-- Tlačidlo pre aktualizáciu informácií -->
<a href="update.php"><button>Aktualizovať informácie</button></a>

<!-- Tlačidlo pre mazanie informácií -->
<a href="delete.php"><button>Zmazať informácie</button></a>

<a href="/SJSlovensko/SJprojektS/index.php"><button>Prejst spat na stranku</button></a>

</body>
</html>
