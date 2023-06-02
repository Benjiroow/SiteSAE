<main>
    <header class="header-title">
        <?php //include 'view/parts/precedent_suivant.php' 
        ?>
        <h1><span><?= $produits[0]['nom'] ?></span> No. <?= $produits[0]['num_produit'] ?></h1>
    </header>
    <div class="container variations">
        <?php if ($nbVariations > 1) : ?>
            <select name="variations" id="var-select">
                <?php foreach ($produits as $key => $variation) : ?>
                    <option value="<?= $variation['num_forme'] ?>"><?= $variation['nom'] ?></option>
                <?php endforeach ?>
            </select>
        <?php endif ?>
    </div>
    <?php foreach ($produits as $produit) : ?>
        <?php $numForm = $produit['num_forme'] ?>
        <div class="container caracteristics <?= $numForm == 0 ? 'active' : '' ?>" data-num-form="<?= $numForm ?>" id="produit-<?= $numForm ?>">
            <div class="left">
                <figure>
                    <img src="public/images/produits/<?= $produit['num_produit'] . ($numForm > 0 ? '_f' . ($numForm + 1) : '') ?>.png" class="img-full" />
                </figure>
                <div class="stats">
                    <h2>Stats de base</h2>
                    <div class="stats-boxes">
                        <?php for ($i = 15; $i > 0; $i--) : ?>
                            <?php foreach ($produit['stats'] as $stat) : ?>
                                <div class="stats-cell stats-cell--<?= ($stat <= $i) ? 'white' : 'blue' ?>"></div>
                            <?php endforeach ?>
                        <?php endfor ?>
                        <?php foreach (array_keys($produit['stats']) as $key) : ?>
                            <div class="stats-intitule"><?= $key ?></div>
                        <?php endforeach ?>
                    </div>
                </div>

            </div>
            <div class="right">
                <section class="pres">
                    <div class="pres-descriptions">
                        <div id="description-x-<?= $numForm ?>" class="version version-x active"><?= $produit['description1'] ?></div>
                        <div id="description-y-<?= $numForm ?>" class="version version-y"><?= empty($produit['description2']) ? $produit['description1'] : $produit['description2'] ?></div>
                    </div>

            </div>
        </div>
    <?php endforeach ?>
</main>