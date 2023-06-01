<?php

require_once "app/model/param.model.php";


function getProduit(int $numProduit, PDO $db): array
{
    $sql = "SELECT * FROM produit WHERE num_produit=:numProduit";
    $params = [
        'numProduit' => [$numProduit, PDO::PARAM_INT],
    ];
    return launchSimpleRequest($sql, $params, $db);
}