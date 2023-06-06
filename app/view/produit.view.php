<main>
<?php if ($produits[0]['num_produit']=="008"):?>
    <?php if($sousbock==1):?>
        <img src="public/images/anim/small/008-1.png" alt="" class="pic">
    <?php elseif($sousbock==2):?>
        <img src="public/images/anim/small/008-2.png" alt="" class="pic">
    <?php elseif($sousbock==3):?>
        <img src="public/images/anim/small/008-3.png" alt="" class="pic">
    <?php elseif($sousbock==4):?>
        <img src="public/images/anim/small/008-4.png" alt="" class="pic">
    <?php else:?>
        <img src="public/images/anim/small/008-5.png" alt="" class="pic">
    <?php endif ?>
<?php else : ?>
    <img src="public/images/anim/small/<?= $produits[0]['num_produit'] ?>.png" alt="<?= $produits[0]['nom'] ?>" class="pic">
<?php endif ?>

<?php if ($produits[0]['num_produit']=="008" || $produits[0]['num_produit']=="007"):?>
        <h1 class="descprod"><?= $produits[0]['nom'] ?></h1> <h1 class="descprod"><?= $produits[0]['prix']?>€</h1> 
        <h3 class="descprod"><?= $produits[0]['description']?></h3> 
        <h3 class="descprod"><?= $produits[0]['ingredients']?></h3> 
<?php else: ?>
        <h1 class="descprod"><?= $produits[0]['nom'] ?> (75cl)</h1> <h1 class="descprod"><?= $produits[0]['prix']?>€</h1> 
        <h3 class="descprod"><?= $produits[0]['description']?></h3> 
        <h3 class="descprod"><?= $produits[0]['ingredients']?></h3> 
<?php endif ?>
</main>
