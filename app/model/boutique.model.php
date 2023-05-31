<?php



function getBoutique(int $numPage, PDO $db): array
{
    $end = 9;
    $begin = $end - 9;
    $sql = "SELECT num_produit AS num, nom FROM produit LIMIT " . $begin .", " . $end;

    $stmt = $db->query($sql);

    $results = $stmt->fetchAll();
    return $results;
}

function getPages(PDO $db) : int
{
    $sql = "SELECT count(*) as nb_produits FROM produit";
    $stmt = $db->query($sql);
    $result = $stmt->fetch();
    return ceil($result['nb_produits'] / 9);
}


function getProduitByNum(int $search, PDO $db): array
{
    $sql = "SELECT nom FROM produit WHERE num_produit=:numProduit";
    $stmt = $db->prepare($sql);
    $stmt->bindParam('numProduit', $search, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll();
}


function getProduitByName(string $search, PDO $db): array
{
    $sql = "SELECT num_produit AS num, nom FROM produits 
    WHERE nom LIKE :nomProduit"; //LIKE -> quand on cherche quelque chose qui fait partie (genre pika pour pikachu)
    $stmt = $db->prepare($sql);
    $stmt->bindValue('nomProduit', $search . "%", PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetchAll();   
}