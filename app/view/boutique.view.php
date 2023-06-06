<main>
<?php // include 'app/view/parts/searchform.php' ?>
<h1 id="titre">Boutique</h1>
<section id="container-boutique">
<div>
    <?php foreach ($boutique as $produit) : ?>
        <div class="produit">
                <a href="<?= URL ?>produit.php?num=<?= $produit['num'] ?>">
                    <?php if ($produit['num']=="008"):?>
                        <?php if($sousbock==1):?>
                            <img src="public/images/produits/small/008-1.png" alt="" class="sb">
                        <?php elseif($sousbock==2):?>
                            <img src="public/images/produits/small/008-2.png" alt="" class="sb">
                        <?php elseif($sousbock==3):?>
                            <img src="public/images/produits/small/008-3.png" alt="" class="sb">
                        <?php elseif($sousbock==4):?>
                            <img src="public/images/produits/small/008-4.png" alt="" class="sb">
                        <?php else:?>
                            <img src="public/images/produits/small/008-5.png" alt="" class="sb">
                        <?php endif ?>
                    <?php else : ?>
                    <img src="public/images/produits/small/<?= $produit['num'] ?>.png" alt="<?= $produit['nom'] ?>" id="prod<?= $produit['num'] ?>">
                    <?php endif ?>
                </a>
            <div class="description" id="descprod<?= $produit['num'] ?>">
                <a id="nomprod<?= $produit['num'] ?>" class="produit-nom" href="<?= URL ?>produit.php?num=<?= $produit['num'] ?>"><p><?= $produit['nom'] ?></p></a>
                <p class="produit-prix"><?= $produit['prix'] ?>€</p>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>
</section>
</main>
