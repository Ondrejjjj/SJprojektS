
<?php
// Začnite session
session_start();

// Kontrola, či je používateľ prihlásený
if (!isset($_SESSION['username'])) {  // Check after session starts
    header("Location: /SJSlovensko/SJprojektS/skuska/login.php"); // Presmerovanie na prihlasovaciu stránku, ak používateľ nie je prihlásený
    exit();
}
?>


<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Kontaktný formulár">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Kontakt</title>
</head>
<body class="bg-info">

    <?php include 'header.php'; ?>

    <main class="container text-center mt-5">
        <div class="container">
            <h1>Kontaktujte nás</h1>
            <form action="create_contact.php" method="post">
                <div class="form-group">
                    <label for="name">Meno:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="subject">Predmet správy:</label>
                    <input type="text" class="form-control" id="subject" name="subject" required>
                </div>
                <div class="form-group">
                    <label for="message">Správa:</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Odoslať</button>
            </form>

            <!-- CRUD tlačidlá -->
            
        </div>
    </main>

    <?php include 'footer.php'; ?>

<script src="js/contact.js"></script>
</body>
</html>
