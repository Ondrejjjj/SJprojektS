<!DOCTYPE html>
<html>
<head>
    <title>Aktualizovať turistické informácie</title>
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
