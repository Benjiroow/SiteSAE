<?php

session_start();

require_once 'config.php';
require_once 'app/model/dataConnection.php';
require_once 'app/model/commande.model.php';
require_once 'app/model/boutique.model.php';

$databaseConnection = getDatabaseConnection();
$boutique = getBoutique(1, $databaseConnection);
$sousbock = rand(0,5);

if (isset($_SESSION['majeur'])&&$_SESSION['majeur']) {
    $css = 'commande.style.css';
    $view = 'app/view/commande.view.php';
    $page_title = "Commande - Alda";
} else {
    $css = "page_age.style.css";
    $view = 'app/view/page_age.view.php';
    $page_title = "Validation âge - Alda";
}



if (isset($_SESSION['message'])){
    $msgCommande = htmlspecialchars($_SESSION['message']); // on récupère dans une variable, htmlspecialchars -> rendre inaccessible au public, pour sécuriser
    unset($_SESSION['message']); //efface ce qu'il y a dans la session
}





// Génération de la page à partir de la vue et du layout


ob_start();
require_once $view;
$content = ob_get_clean();
require_once 'app/view/common/layout.php'; 
