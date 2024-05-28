<!DOCTYPE html>
<html>
<head>
    <title>Aktualizovať turistické informácie</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h2 { color: #4CAF50; }
        form { width: 300px; margin: 0 auto; }
        label { font-weight: bold; }
        input[type="text"], textarea { width: 100%; padding: 8px; margin-bottom: 10px; box-sizing: border-box; }
        input[type="submit"] { background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; }
        input[type="submit"]:hover { background-color: #45a049; }
        a { text-decoration: none; }
    </style>
</head>
<body>

<h2>Aktualizovať turistické informácie:</h2>

<form action="update_process.php" method="post">
    <label for="id">ID:</label><br>
    <input type="text" id="id" name="id"><br>
    <label for="new_location">Nová lokalita:</label><br>
    <input type="text" id="new_location" name="new_location"><br>
    <label for="new_type">Nový typ:</label><br>
    <input type="text" id="new_type" name="new_type"><br>
    <label for="new_info">Nové info:</label><br>
    <textarea id="new_info" name="new_info"></textarea><br><br>
    <input type="submit" value="Aktualizovať">
</form>

</body>
</html>
