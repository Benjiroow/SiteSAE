<section class="search">
    <form action="<?= URL ?>search.php" method="post">
        <label for="search">Nom ou numéro</label>
        <input type="text" class="search-field" name="search" aria-label="champs de recherche">
        <input type="submit" class="search-btn" value="🔎" aria-label="rechercher">
    </form>
    <div class="search-explanation">
        Rechercher un pokemon par son nom ou son numéro de Pokédex national.
    </div>
</section>