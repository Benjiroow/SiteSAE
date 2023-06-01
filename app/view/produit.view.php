<main>
    <div class="container produit">
        <?php foreach ($produits as $produit) : ?>
            <div class="produit-details">
                <h2 class="produit-nom"><?= $produit['nom'] ?></h2>
                <p class="produit-prix"><?= $produit['prix'] ?> €</p>
                <p class="produit-description"><?= $produit['description'] ?></p>
                <p class="produit-ingredients"><?= $produit['ingredients'] ?></p>
            </div>
        <?php endforeach ?>
    </div>
</main>