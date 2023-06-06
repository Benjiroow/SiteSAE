<main>
    <div id="paragraphe">
        <h2>Passer commande</h2>
        <section>
            <p>
                Nos géants livreurs feront tout leur nécéssaire pour arriver à temps chez vous.
                <br>N'hésitez pas à nous faire un retour sur leur vitesse et leur qualité de livraison via la page <a href="contact.php">Contact</a>.
                <br>(Vous pouvez essayer via pigeon voyageur mais nos dragons risquent d'être légérement attirés par ces friandises volantes)
            </p>
            <?php if (isset($msgCommande)):?>
            <p id="validationcommande"><?= $msgCommande ?>€ </p>
            <?php endif ?>
        </section>
    </div>
    <div id="commande">
        <h2>Ne pas renseigner de numéro si vous vous êtes inscrits sur la page précédente. </h2>
        <form action="newCommande.php" method="post">
            <fieldset class="formulaire">
                <div class="champ">
                    <label for="numero_client">Numéro client :</label>
                    <input type="text" id="numero_client" name="numero_client" required>
                </div>
            </fieldset>
            <div>
                <h2>Produits</h2>
                <?php foreach ($boutique as $produit) : ?>
                    <div class="produit">
                        <?php if ($produit['num'] == "008") : ?>
                            <?php if ($sousbock == 1) : ?>
                                <img src="public/images/produits/small/008-1.png" alt="" class="pic">
                            <?php elseif ($sousbock == 2) : ?>
                                <img src="public/images/produits/small/008-2.png" alt="" class="pic">
                            <?php elseif ($sousbock == 3) : ?>
                                <img src="public/images/produits/small/008-3.png" alt="" class="pic">
                            <?php elseif ($sousbock == 4) : ?>
                                <img src="public/images/produits/small/008-4.png" alt="" class="pic">
                            <?php else : ?>
                                <img src="public/images/produits/small/008-5.png" alt="" class="pic">
                            <?php endif; ?>
                        <?php else : ?>
                            <img src="public/images/produits/small/<?= $produit['num'] ?>.png" alt="<?= $produit['nom'] ?>">
                        <?php endif; ?>
                        <a class="lienproduit" href="<?= URL ?>produit.php?num=<?= $produit['num'] ?>"><p class="produit-nom"><?= $produit['nom'] ?> Prix : <?= $produit['prix']?> €</p></a>
                        <label for="quantite_produit1">Quantité:</label>
                        <input type="number" class="quantite_produit" name="quantite_produit<?= $produit['num']?>" min="1" max="10">
                    </div>
                <?php endforeach; ?>
            </div>
            <button type="submit">Passer la commande</button>
        </form>
    </div>
</main>