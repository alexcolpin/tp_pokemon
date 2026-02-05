<h2>Liste des Pokémon</h2>

<?php foreach ($pokemons as $p): ?>
    <div>
        <h3><?= $p['name']['fr'] ?></h3>
        <img src="<?= $p['sprites']['regular'] ?>" width="100">
        <p>
            <?php foreach ($p['types'] as $type): ?>
                <?= $type['name'] ?>
            <?php endforeach; ?>
        </p>
        <a href="index.php?action=detail&id=<?= $p['pokedex_id'] ?>">
            Voir détail
        </a>
    </div>
    <hr>
<?php endforeach; ?>
