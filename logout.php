<?php
require_once 'session.php';

$session = new Session();
$session->destroy();
$session->redirect('index.php');
?>
