<main>
    <?php include 'app/view/parts/searchform.php' ?>
    <div class="container pokedex">
        <?php foreach ($boutique as $produit) : ?>
            <div class="pokemon">
                    <a href="<?= URL ?>produit.php?num=<?= $produit['num'] ?>">
                        <?php if ($produit['num']=="008"):?>
                            <?php if($sousbock==1):?>
                                <img src="public/images/produits/small/008-1" alt="" class="pic">
                            <?php elseif($sousbock==2):?>
                                <img src="public/images/produits/small/008-2" alt="" class="pic">
                            <?php elseif($sousbock==3):?>
                                <img src="public/images/produits/small/008-3" alt="" class="pic">
                            <?php elseif($sousbock==4):?>
                                <img src="public/images/produits/small/008-4" alt="" class="pic">
                            <?php else:?>
                                <img src="public/images/produits/small/008-5" alt="" class="pic">
                            <?php endif ?>
                        <?php else : ?>
                        <img src="public/images/produits/small/<?= $produit['num'] ?>.png" alt="<?= $produit['nom'] ?>">
                        <?php endif ?>
                    </a>
                <div class="description">
                    <p class="produit-num">No. <?= $produit['num'] ?></p>
                    <p class="produit-nom"><?= $produit['nom'] ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
        <!-- problème html ici -->
        <?php if (isset($nbPages)) : ?>
            <nav class="nav-pagination" aria-label="pagination">
                <ul class="pagination">
                    <?php if ($currentPage > 1) : ?>
                        <li><a href="<?= URL ?>boutique.php?page=<?= ($currentPage - 1) ?>"><span aria-hidden="true">«</span><span class="visuallyhidden">Page précédente</span></a></li>
                    <?php endif ?>
                    <?php for ($i = 1; $i < $nbPages + 1; $i++) : ?>
                        <?php if ($currentPage == $i) : ?>
                            <li class="current-page" aria-current="page">
                                <span class="visuallyhidden">page </span><?= $i ?>

                            </li>
                        <?php else : ?>
                            <li>
                                <a href="<?= URL ?>boutique.php?page=<?= $i ?>">
                                    <span class="visuallyhidden">page </span><?= $i ?>
                                </a>
                            </li>
                        <?php endif ?>
                    <?php endfor ?>
                    <?php if ($currentPage < $nbPages) : ?>
                        <li><a href="<?= URL ?>boutique.php?page=<?= ($currentPage + 1) ?>"><span class="visuallyhidden">Page suivante</span><span aria-hidden="true">»</span></a></li>
                    <?php endif ?>
                </ul>
            </nav>
        <?php endif ?>
    </div>
</main>