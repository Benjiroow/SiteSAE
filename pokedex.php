<?php 

require_once 'utils.php';
require_once 'config.php';
require_once 'app/model/dataConnection.php';
require_once 'app/model/pokedex.model.php';


$databaseConnection = getDatabaseConnection();
$nbPages = getPages($databaseConnection);


//J'aurai un problème si :
//- valeur vide => renvoyer à la page 1
//- autre chose qu'un numéro => renvoyer à la page 1
//- numéro de page inexistant => renvoyer à la page la plus proche
// si <1 => page 1, si > dernière page alors dernière page

if (empty($_GET['page']) || !is_numeric($_GET['page']) || $_GET['page'] < 1) {
    $currentPage = 1;
} else if ($_GET['page'] > $nbPages) {
    $currentPage = $nbPages;
} else {
    $currentPage = $_GET['page'];
}



//$currentPage = $_GET['page']; // À ne pas faire comme ça 
//echo htmlentities($currentPage); //désactive les chevrons pour pas que du script java puisse être mis à la place dans l'url et donc potentiels hacks
$pokedex = getPokedexWhithoutTypes($currentPage, $databaseConnection);
$pokedex = addTypesTopokemons($pokedex, $databaseConnection);



// Génération de la page à partir de la vue et du layout
$page_title = 'Pokedex';
$css = 'poke.css';

ob_start();
require_once 'app/view/pokedex.view.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php'; 