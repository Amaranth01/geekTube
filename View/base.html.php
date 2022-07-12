<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GeekTube</title>

    <link rel="stylesheet" href="/asset/base.css">
    <link rel="stylesheet" href="/asset/css/menu.css">
</head>
<body>

<div>
    <h1>GeekTube</h1>
    <form action="">
        <input type="search" name="search" id="search" placeholder="Rechercher">
        <button id="searching"><i class="fas fa-search"></i></button>
    </form>
</div>


<div>
    <nav>
        <ul>
            <li><a href="/index.php?c=home&a=test">Tous</a></li>
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
        <a href="" id="privacyPolicy">Politique de confidentialité</a>
    </p>
    <p>
        <a href="" id="privacyPolicy">Mentions légales</a>
    </p>
</footer>

</body>
<script src="https://kit.fontawesome.com/25d98733ec.js"></script>

</html>