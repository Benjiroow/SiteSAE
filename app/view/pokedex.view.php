<main>
    <?php include 'app/view/parts/searchform.php' ?>
    <div class="container pokedex">
        <?php foreach ($pokedex as $pokemon) : ?>
            <div class="pokemon">
                <figure>
                    <a href="">
                        <img src="public/images/pokemon/small/<?= formatNumPokemon($pokemon['num']) ?>.png" alt="<?= $pokemon['nom'] ?>">
                    </a>
                </figure>
                <div class="description">
                    <p class="pokemon-num">No. <?= formatNumPokemon($pokemon['num']) ?></p>
                    <p class="pokemon-nom"><?= $pokemon['nom'] ?></p>
                    <div class="types">
                        <ul>
                            <?php foreach ($pokemon['types'] as $type) : ?>
                                <li class="type--<?= convertType2Class($type) ?>"><?= $type ?></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</main>