<?php
include_once 'ContactForm.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $contactForm = new ContactForm();
    if ($contactForm->saveContact($name, $subject, $message)) {
        $message = 'Správa bola úspešne odoslaná!';
    } else {
        $message = 'Chyba pri odosielaní správy.';
    }
}
?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Výsledok odoslania formulára">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Výsledok odoslania formulára</title>
</head>
<body class="bg-info text-center">
    <main class="container mt-5">
        <div class="alert alert-info">
            <?php echo $message; ?>
        </div>
        <a href="kontaktny_formular.php" class="btn btn-primary">Späť na kontaktný formulár</a>
    </main>
</body>
</html>
