<?php 
session_start();

require_once 'utils.php';
require_once 'config.php';
require_once 'app/model/dataConnection.php';
require_once 'app/model/boutique.model.php';

/*
if (empty($_GET['search'])) {
    $_SESSION['message'] = 'Veuillez rentrer une valeur';
    header('location:' . URL . 'boutique.php');
    exit;
}

$search = $_GET['search'];
*/
$databaseConnection = getDatabaseConnection();
/*
if (is_numeric($search)) {
    $search = (int) $search;
    $pokedex = getProduitByNum($search, $databaseConnection);
} else {
    $pokedex = getProduitByName($search, $databaseConnection);
} 
*/
// Génération de la page à partir de la vue et du layout
$page_title = "Boutique - Alda";
$css = 'boutique.style.css';

ob_start();
require_once 'app/view/boutique.view.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php'; 


















