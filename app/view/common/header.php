<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="public\images\logo_alda_blanc_sur_fond_noir"/>
    <link rel="stylesheet" href="public/css/header.style.css">
    <link rel="stylesheet" href="public/css/footer.style.css">
    <link rel="stylesheet" href="public/css/<?= $css ?>">
    <title><?= $page_title ?></title>
</head>

<body>
        <header>
                <nav>
                    <ul class="menu">
                        <li class="classheadergauche"><a href="boutique.php">Nos produits</a></li>
                        <li class="classheadercentre"><a href="apropos.php">A propos de nous </a></li>
                        <li id="listlogo"><a href="index.php"><img id="logo" src="public\images\logo_alda_blanc.png"></a></li>
                        <li class="classheadercentre"><a href="vulgarisation.php">Brassage</a></li>
                        <li class="classheaderdroite"><a href="contact.php">Contact</a></li>
                        <li><a href="commande.php"><img id="caddie" src="public\images\caddie.png"></a></li>
                    </ul>
                </nav>
        </header>