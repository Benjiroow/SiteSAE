<?php


require_once 'app/model/pokemon.model.php';
require_once 'database.php';
require_once 'utils.php';

$db = getDatabaseConnectionToSQLite();

// Données concernant le pokemon
$numPokemon = 6;
$pokemons = getPokemon($numPokemon, $db);
$types = getTypesByForm($pokemons, $db);
$weaknesses = getWeaknessesByTypes($pokemons, $db);
$talents = getTalentsByForm($pokemons, $db);
$nbVariations = count($pokemons);
for ($i = 0; $i < $nbVariations; $i++) {
    $numForm = $pokemons[$i]['num_forme'];
    $pokemons[$i]['formatNum'] = sprintf("%04d", $pokemons[$i]['num_pokemon']);
    $pokemons[$i]['stats'] = [
        'PV' => $pokemons[$i]['pv'],
        'Attaque' => $pokemons[$i]['attaque'],
        'Défense' => $pokemons[$i]['defense'],
        'Attaque Spéciale' => $pokemons[$i]['attaque_speciale'],
        'Défense Spéciale' => $pokemons[$i]['defense_speciale'],
        'Vitesse' => $pokemons[$i]['vitesse'],
    ];
    unset($pokemons[$i]['pv']);
    unset($pokemons[$i]['attaque']);
    unset($pokemons[$i]['defense']);
    unset($pokemons[$i]['attaque_speciale']);
    unset($pokemons[$i]['defense_speciale']);
    unset($pokemons[$i]['vitesse']);
    $talents[$numForm] = empty($talents[$numForm]) ? $talents[0] : $talents[$numForm];
    $types[$numForm] = empty($types[$numForm]) ? $types[0] : $types[$numForm];
    $weaknesses[$numForm] = empty($weaknesses[$numForm]) ? $weaknesses[0] : $weaknesses[$numForm];
                                    
}
//$previous = $t_previous[$numPokemon];
//$next = $t_next[$numPokemon];

// Génération de la page à partir de la vue et du layout
$page_title = $pokemons[0]['nom'];

ob_start();
require_once 'app/view/pokemon.view.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php';
