<?php
require 'classes/FormHandler.php';
require 'functions/functions.php';

use App\FormHandler;

$formHandler = new FormHandler();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = $formHandler->processForm($_POST);
    $errors = $result['errors'] ?? null;
    $lastId = $result['insertedID'] ?? null;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <link rel="stylesheet" href="main.css">
</head>

<body class="bg-dark-subtle">
    <header>
        <nav class="navbar bg-dark p-4">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="/images/logo.svg" alt="Seodium Logo" width="200px;" />
                </a>
            </div>
        </nav>
    </header>
    <div class="container d-flex min-vh-100 justify-content-center align-items-center">
        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && empty($errors)) : ?>
            <?php include 'views/success.php'; ?>
        <?php else : ?>
            <?php include 'views/form.php'; ?>
        <?php endif; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/js-confetti@latest/dist/js-confetti.browser.js"></script>
    <script src="js/script.js"></script>
</body>

</html>