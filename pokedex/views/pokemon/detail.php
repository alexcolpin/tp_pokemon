<h2><?= $pokemon['name']['fr'] ?></h2>
<img src="<?= $pokemon['sprites']['regular'] ?>" width="150">

<p>Types :</p>
<ul>
    <?php foreach ($pokemon['types'] as $type): ?>
        <li><?= $type['name'] ?></li>
    <?php endforeach; ?>
</ul>

<a href="index.php?action=pokemon">Retour</a>
