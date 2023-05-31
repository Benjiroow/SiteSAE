<section class="search">
    <form action="<?= URL ?>search.php" method="post">
        <input type="text" class="search-field" name="search" aria-label="champs de recherche">
        <input type="submit" class="search-btn" value="🔎" aria-label="rechercher">
    </form>
    <?php if (isset($message)) : ?>
        <div class="message">
            <p><?= $message ?></p>
        </div>
    <?php endif ?>
</section>