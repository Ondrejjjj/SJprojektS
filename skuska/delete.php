<!DOCTYPE html>
<html>
<head>
    <title>Vymazať turistické informácie</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; text-align: center; }
        h2 { color: #4CAF50; }
        form { width: 300px; margin: 0 auto; }
        label { font-weight: bold; }
        input[type="text"] { width: 100%; padding: 8px; margin-bottom: 10px; box-sizing: border-box; }
        input[type="submit"] { background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; }
        input[type="submit"]:hover { background-color: #45a049; }
    </style>
</head>
<body>

<h2>Vymazať turistické informácie:</h2>

<form action="delete_process.php" method="post">
    <label for="id">ID:</label><br>
    <input type="text" id="id" name="id"><br><br>
    <input type="submit" value="Vymazať">
</form>

</body>
</html>
