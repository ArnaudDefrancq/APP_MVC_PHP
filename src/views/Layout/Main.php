<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Site Association Regain">

    <title>Mon site</title>
    <link rel="stylesheet" href="/css/common.css" type="text/css">
    <link rel="stylesheet" href="/css/header.css" type="text/css">
    <link rel="stylesheet" href="/css/footer.css" type="text/css">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <link rel="icon" type="image/png" href="/img/regainfavicon.svg">
    <script src="/js/HeaderMenu.js" defer></script>

    <?php
    // ajout du CSS pour la vue à rendre
    if (isset($view_name)) { ?>
        <link rel="stylesheet" href="/css/<?= strtolower($view_name) ?>.css" type="text/css">
    <?php } // fin du foreach d'intégration des fichiers CSS
    ?>
</head>

<body>
    <?php require_once(__DIR__ . '/Header.php'); ?>
    <main>
        <?= $content ?>
    </main>
    <?php require_once(__DIR__ . '/Footer.php'); ?>
</body>