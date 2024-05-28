<!DOCTYPE html>
<html>
<head>
    <title>Formulár pre zadávanie turistických informácií</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        form {
            width: 300px;
            margin: 0 auto;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box; /* Zahrnie padding v šírke */
        }

        input[type="submit"],
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover,
        button:hover {
            background-color: #45a049;
        }

        a {
            text-decoration: none;
        }

        button {
            margin-right: 10px;
        }
    </style>
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

<a href="/SJSlovensko/SJprojektS/index.php"><button>Prejsť späť na stránku</button></a>

</body>
</html>
