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

        <h1 class="container">Stranka na prihlasenie</h1>
        <!-- zaciatok vkladania informacii -->  

<!-- zaciatok vkladania informacii -->
    <form action="action_page.php" method="post">
  <div class="imgcontainer">
    <img src="img/avatar1.png" alt="Avatar" class="avatar" style="width: 200px; height: 200px;">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

</form>



    </main>


    <!-- footer -->
    <?php include 'footer.php'; ?>



    
    

    <script src="js/jstranka3.js"></script>
</body>

</html>