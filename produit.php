<?php

session_start();

require_once 'app/model/produit.model.php';
require_once 'app/model/dataConnection.php';
require_once 'utils.php';



if (isset($_SESSION['majeur'])&&$_SESSION['majeur']) {
    $css = 'produit.style.css';
    $db = getDataBaseConnection();
    $produits =  getProduit($numProduit, $db); //ya un soucis ici $numProduit pas reconnu
    $view = 'app/view/produit.view.php';
    $page_title = $produits[0]['nom'];
} else {
    $css = "page_age.style.css";
    $view = 'app/view/page_age.view.php';
    $page_title = "Validation âge - Alda";
}



// Données concernant le pokemon
if (empty($_GET['num']) || !ctype_digit($_GET['num']) || $_GET['num']<0) {
    die('Aucun numéro de produit détecté ou numéro incorrect');
}



// Génération de la page à partir de la vue et du layout

ob_start();
require_once $view;
$content = ob_get_clean();
require_once 'app/view/common/layout.php'; 
