<?php

session_start();

require_once 'config.php';
require_once 'app/model/dataConnection.php';
require_once 'app/model/client.model.php';

$databaseConnection = getDatabaseConnection();
$clients = getClients($databaseConnection);

if (isset($_SESSION['majeur'])&&$_SESSION['majeur']) {
    $css = 'commande.style.css';
    $view = 'app/view/commande.view.php';
    $page_title = "Commande - Alda";
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
