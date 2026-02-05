<?php
session_start();

require_once 'controllers/AuthController.php';
require_once 'controllers/PokemonController.php';

$action = $_GET['action'] ?? 'home';

$auth = new AuthController();
$pokemon = new PokemonController();

require 'views/layout/header.php';

switch ($action) {
    case 'register':
        $auth->register();
        break;
    case 'login':
        $auth->login();
        break;
    case 'logout':
        $auth->logout();
        break;
    case 'pokemon':
        $pokemon->showAllPokemon();
        break;
    case 'detail':
        $pokemon->showOnePokemon($_GET['id']);
        break;
    default:
        echo isset($_SESSION['user'])
            ? "<h2>Bienvenue {$_SESSION['user']}</h2>"
            : "<h2>Bienvenue sur le Mini Pokédex</h2>";
        break;
}

require 'views/layout/footer.php';
