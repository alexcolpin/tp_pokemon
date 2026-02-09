<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="public/style.css">
    <meta charset="UTF-8">
    <title>Mini Pokédex</title>
</head>
<body>
<nav>
    <a href="index.php">Accueil</a> |
    <a href="index.php?action=pokemon">Pokédex</a> |
    <?php if (isset($_SESSION['user'])): ?>
        <a href="index.php?action=logout">Déconnexion</a>
    <?php else: ?>
        <a href="index.php?action=login">Connexion</a>
        <a href="index.php?action=register">Inscription</a>
    <?php endif; ?>
</nav>
<hr>
