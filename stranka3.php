<!DOCTYPE html>
<html lang="sk">
<head>

    <meta charset="UTF-8">
    <meta name="description" content="Slovensko">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/stranka3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Slovensko</title>

</head>

<body class="bg-info">

<?php include 'header.php'; ?>

        <h1 class="container">Stranka s informaciami</h1>
        <!-- zaciatok vkladania informacii -->

<form class="container text-center" action="thankyou.html">
        <label for="name">Meno:</label><br>
        <input type="text" id="name" name="name" value=""><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value=""><br>
        <label for="city">city:</label><br>
        <input type="city" id="city" name="city" value=""><br>
        <label for="adress">adress:</label><br>
        <input type="adress" id="adress" name="adress" value=""><br>
        <label for="suhlas so spracovaim osobnym uadajov">suhlas so spracovanim udajov</label><br>   
        <input type="checkbox" id="suhlas" name="suhlas so spracovaim uadajov" value=""><br>
        <select for="krajina" id="mesto"><br>
            <option>Slovensko</option>
            <option>Madarsko</option>
            <option>Cesko</option>
            <option>Ukrajina</option>
        </select><br><br>
        <input type="submit" value="Odoslať">
    </form>
  




    </main>


    <!-- footer -->
    <?php include 'footer.php'; ?>



    
    

    <script src="js/jstranka3.js"></script>
</body>

</html>