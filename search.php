<?php 

require_once 'utils.php';
require_once 'config.php';
require_once 'app/model/dataConnection.php';
require_once 'app/model/pokedex.model.php';

$search = $_POST['search'];

//Récupère les pokemons correspondant à la recherche
//Recherche du pokemon dans la base de données

$databaseConnection = getDatabaseConnection();
$pokedex = getPokedexByNum($search, $databaseConnection);
$pokedex = addTypesToPokemons($pokedex, $databaseConnection);



// Génération de la page à partir de la vue et du layout
$page_title = 'Pokedex';
$css = 'poke.css';

ob_start();
require_once 'app/view/pokedex.view.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php'; 


















