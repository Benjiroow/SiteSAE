<?php
/*
function getPokedexWhithoutTypes(int $numPage, PDO $db): array
{
    $end = $numPage * 12;
    $begin = $end - 12;
    $sql = "SELECT num_pokemon AS num, nom FROM pokemon WHERE num_forme=0 LIMIT " . $begin .", " . $end;

    $stmt = $db->query($sql);
    
    $results = $stmt->fetchAll();
    return $results;
}
*/
function getBoutique(PDO $db): array
{
    $sql = "SELECT nom FROM produit WHERE num_produit=001";
    $stmt = $db->query($sql);

    $results = $stmt->fetchAll();
    return $results;
}

/*
function getPages(PDO $db) : int
{
    //Trouver le nombre de pokemon dans la bd
    $sql = "SELECT count(*) as nb_pokemon FROM Pokemon WHERE num_forme=0";
    $stmt = $db->query($sql);
    $result = $stmt->fetch();
    //Diviser le résultat par 12 (nombre de pokemon par page)
    return ceil($result['nb_pokemon'] / 12);
}
*/
function getPokedexByNum(int $search, PDO $db) : array
{
    $sql = "SELECT num_pokemon AS num, nom FROM pokemon WHERE num_pokemon=:numPokemon AND num_forme=0";
    $stmt = $db->prepare($sql);
    $stmt->bindParam('numPokemon', $search, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll();
}


function getAllTypes(PDO $db): array
{
    $sql = "SELECT * FROM type_faiblesse";
    $query = $db->query($sql);

    $types = [];
    while ($line = $query->fetch()) {
        $types[$line['id_type']] = $line['nom'];
    }
    return $types;
}

/**
 * Le tableau de pokemons doit contenir pour chaque ligne un champs "num".
 */
function addTypesToPokemons(array $pokemons, PDO $db): array
{
    $allTypes = getAllTypes($db);

    $sql = "SELECT id_type FROM posseder_type WHERE num_pokemon=:numPokemon AND num_forme=0";
    $stmt = $db->prepare($sql);

    $pokedex = [];
    foreach ($pokemons as $pokemon) {
        $stmt->bindParam('numPokemon', $pokemon['num'], PDO::PARAM_INT);
        $stmt->execute();

        $types = [];
        while ($data = $stmt->fetch()) {
            $idType = $data['id_type'];
            $types[$idType] = $allTypes[$idType];
        }
        $pokemon['types'] = $types;
        $pokedex[] = $pokemon;
    }

    return $pokedex;
}

