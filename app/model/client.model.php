<?php

require_once "app/model/param.model.php";

function getClients( PDO $db): array
{
    $sql = "SELECT num_client AS num, nom FROM produit";

    $stmt = $db->query($sql);

    $results = $stmt->fetchAll();
    return $results;
}


function addNewClient(array $pokemon, PDO $db): bool
{
    try {
        $keys = array_keys($pokemon);
        $sql = "INSERT INTO pokemon (" . writeColumns($keys) .  ") VALUES (" . writeParametersList($keys) . ")";
        $stmt = $db->prepare($sql);
        foreach ($pokemon as $key => $item) {
            $stmt->bindValue($key, $item);
        }
        $stmt->execute();
        return true;
    } catch (PDOException $e) {
        echo $e;
        throw new Exception("Erreur lors de l'insertion du nouveau pokemon");
    }
}

function writeParametersList(array $keys): string
{
    $parameters = '';
    $nbKeys = count($keys);
    for ($i = 0; $i < $nbKeys; $i++) {
        $coma = ($i == $nbKeys - 1) ? '' : ', ';
        $parameters .= ':' . $keys[$i] . $coma;
    }
    return $parameters;
}

function writeColumns(array $keys): string
{
    $columns = '';
    $nbKeys = count($keys);
    for ($i = 0; $i < $nbKeys; $i++) {
        $coma = ($i == $nbKeys - 1) ? '' : ', ';
        $columns .= $keys[$i] . $coma;
    }
    return $columns;
}


