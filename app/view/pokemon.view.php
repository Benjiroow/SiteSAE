<main>
    <header class="header-title">
        <?php //include 'view/parts/precedent_suivant.php' 
        ?>
        <h1><span><?= $pokemons[0]['nom'] ?></span> No. <?= $pokemons[0]['formatNum'] ?></h1>
    </header>
    <div class="container variations">
        <?php if ($nbVariations > 1) : ?>
            <select name="variations" id="var-select">
                <?php foreach ($pokemons as $key => $variation) : ?>
                    <option value="<?= $variation['num_forme'] ?>"><?= $variation['nom'] ?></option>
                <?php endforeach ?>
            </select>
        <?php endif ?>
    </div>
    <?php foreach ($pokemons as $pokemon) : ?>
        <?php $numForm = $pokemon['num_forme'] ?>
        <div class="container caracteristics <?= $numForm == 0 ? 'active' : '' ?>" data-num-form="<?= $numForm ?>" id="pokemon-<?= $numForm ?>">
            <div class="left">
                <figure>
                    <img src="public/images/pokemon/<?= $pokemon['formatNum'] . ($numForm > 0 ? '_f' . ($numForm + 1) : '') ?>.png" class="img-full" />
                </figure>
                <div class="stats">
                    <h2>Stats de base</h2>
                    <div class="stats-boxes">
                        <?php for ($i = 15; $i > 0; $i--) : ?>
                            <?php foreach ($pokemon['stats'] as $stat) : ?>
                                <div class="stats-cell stats-cell--<?= ($stat <= $i) ? 'white' : 'blue' ?>"></div>
                            <?php endforeach ?>
                        <?php endfor ?>
                        <?php foreach (array_keys($pokemon['stats']) as $key) : ?>
                            <div class="stats-intitule"><?= $key ?></div>
                        <?php endforeach ?>
                    </div>
                </div>

            </div>
            <div class="right">
                <section class="pres">
                    <div class="pres-descriptions">
                        <div id="description-x-<?= $numForm ?>" class="version version-x active"><?= $pokemon['description1'] ?></div>
                        <div id="description-y-<?= $numForm ?>" class="version version-y"><?= empty($pokemon['description2']) ? $pokemon['description1'] : $pokemon['description2'] ?></div>
                    </div>
                    <div class="pres-buttons">
                        <p>Versions :</p>
                        <div id="pokeball-x-<?= $numForm ?>" class="pokeball pokeball-x pokeball--blue active" data-numTarget="<?= $numForm ?>">
                            <div class="pokeball-ligne"></div>
                            <div class="pokeball-button pokeball-button--blue"></div>
                        </div>
                        <div id="pokeball-y-<?= $numForm ?>" class="pokeball pokeball-y pokeball--red" data-numTarget="<?= $numForm ?>">
                            <div class="pokeball-ligne"></div>
                            <div class="pokeball-button pokeball-button--red"></div>
                        </div>
                    </div>
                </section>

                <section class="proprietes">
                    <ul>
                        <div>
                            <li>
                                <h2>Taille</h2>
                                <span><?= number_format($pokemon['taille'], 1, ',', '') ?> m</span>
                            </li>
                            <li>
                                <h2>Poids</h2>
                                <span><?= $pokemon['poids'] ? number_format($pokemon['poids'], 1, ',', '') : '??,?' ?> kg</span>
                            </li>
                            <li>
                                <h2>Sexe</h2>
                                <span><?= $pokemon['sexe'] ?></span>
                            </li>

                        </div>

                        <div>
                            <li>
                                <h2>Catégorie</h2>
                                <span><?= $pokemon['categorie'] ?></span>
                            </li>
                            <li>
                                <h2>Talent</h2>
                                <ul class="talents">
                                    <?php foreach ($talents[$numForm] as $talent) : ?>
                                        <li class="talents-item">
                                            <?= $talent['nom'] ?>
                                            <div class="talents-descr">
                                                <div>?</div>
                                                <span><?= str_replace('\n', '<br />', $talent['description']) ?></span>
                                            </div>
                                        </li>
                                    <?php endforeach ?>
                                </ul>
                            </li>

                        </div>

                    </ul>
                </section>

                <section class="types-faiblesses">
                    <h2>Type</h2>
                    <ul>
                        <?php foreach ($types[$numForm] as $type) : ?>
                            <li class="type--<?= convertType2Class($type['nom']) ?>"><?= $type['nom'] ?></li>
                        <?php endforeach ?>
                    </ul>
                    <h2>Faiblesse(s)</h2>
                    <ul>
                        <?php foreach ($weaknesses[$numForm] as $weakness) : ?>
                            <li class="type--<?= convertType2Class($weakness['nom']) ?>">
                                <?= $weakness['nom'] ?>
                                <?php if ($weakness['degats']) : ?>
                                    <div class="degats">
                                        <span>*</span>
                                        <span class="description"><?= $weakness['degats'] ?></span>
                                    </div>
                                <?php endif ?>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </section>
            </div>
        </div>
    <?php endforeach ?>
</main>