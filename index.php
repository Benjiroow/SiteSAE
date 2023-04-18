<?php
require_once 'app/model/dataConnection.php';
require_once 'app/model/pokedex.model.php';


$pokedex = getPokedexWhithoutTypes($databaseConnection);
$pokedex = addTypesToPokemons($pokedex, $databaseConnection);




// Requête préparée :
// Simulation de données récupérées de l'utilisateur
/*
$numPokemon = 3;
$numForme = 0;

$sql = "SELECT num_pokemon, nom FROM pokemon WHERE num_pokemon=:numPokemon AND num_forme=:numForme";
$stmt = $databaseConnection->prepare($sql);
$stmt->bindParam('numPokemon', $numPokemon, PDO::PARAM_INT);
$stmt->bindParam('numForme', $numForme, PDO::PARAM_INT);
$stmt->execute();

$results = $stmt ->fetchAll();

print_r($results);
*/




