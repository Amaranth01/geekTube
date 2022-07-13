<!doctype html>
<html lang="fr">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GeekTube</title>

</head>
<body>
<?php

if (isset($_SESSION['errors'])) {
    $errors = $_SESSION['errors'];
    unset($_SESSION['errors']);
    ?>
    <div class="message error">
        <?= $errors ?>
    </div> <?php
}

// Handling success messages.
if (isset($_SESSION['success'])) {
    $success = $_SESSION['success'];
    unset($_SESSION['success']);
    ?>
    <div class="message success">
        <?= $success ?>
    </div> <?php
}
?>

<h1>GeekTube</h1>
<div>
    <nav id="firstNav">

        <ul class="list">
            <li><a href="/index.php?c=home&a=index">Tous</a></li>
            <li>RPG</li>
            <li>Action</li>
            <li>FPS</li>
            <li>Simulation</li>
            <li>Animaux</li>
            <li>Musique</li>
        </ul>
    </nav>
</div>

<main class="container">
    <?= $html ?>
</main>

<footer>
    <p>
        <a href="/index.php?c=home&a=privacy" id="privacyPolicy">Politique de confidentialité</a>
    </p>
    <p>
        <a href="/index.php?c=home&a=legal-notice" id="privacyPolicy">Mentions légales</a>
    </p>
</footer>

<script src="https://kit.fontawesome.com/25d98733ec.js"></script>

</body>
</html>