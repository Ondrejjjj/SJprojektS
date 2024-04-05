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
  
<!-- zaciatok vkladania informacii -->
    <form action="action_page.php" method="post">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
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

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>


    </main>


    <!-- footer -->
    <?php include 'footer.php'; ?>



    
    

    <script src="js/jstranka3.js"></script>
</body>

</html>