<?php

session_start();

require_once 'config.php';
require_once 'app/model/dataConnection.php';
require_once 'app/model/produit.model.php';
require_once 'utils.php';
require_once 'app/model/boutique.model.php';

$db = getDataBaseConnection();
$sousbock = rand(0,5);
$produits = [];

if (empty($_GET['num']) || !ctype_digit($_GET['num']) || $_GET['num']<0) {
    die('Aucun numéro de produit détecté ou numéro incorrect');
}


if (isset($_SESSION['majeur'])&&$_SESSION['majeur']) {
    $css = 'produit.style.css';
    $view = 'app/view/produit.view.php';
    $produits = getProduit($_GET['num'] , $db); 
    $page_title = $produits[0]['nom'];
} else {
    $css = "page_age.style.css";
    $view = 'app/view/page_age.view.php';
    $page_title = "Validation âge - Alda";
}







// Génération de la page à partir de la vue et du layout

ob_start();
require_once $view;
$content = ob_get_clean();
require_once 'app/view/common/layout.php'; 
