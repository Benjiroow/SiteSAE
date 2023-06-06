<?php

function insertNewCommande(string $dateCommande, string $numClient, string $numProduit, int $quantite, float $prix, PDO $db): bool 
{
    try{
    $sql ="INSERT INTO commande (date_commande, num_client, num_produit, quantite, prix)
            VALUES (:dateCommande, :numClient, :numProduit, :quantiteCommande, :prixCommande)";
    $stmt = $db->prepare($sql);
    $stmt->bindValue('dateCommande', $dateCommande);
    $stmt->bindValue('numClient', $numClient);
    $stmt->bindValue('numProduit', $numProduit);
    $stmt->bindValue('quantiteCommande', $quantite);
    $stmt->bindValue('prixCommande', $prix);
    $stmt->execute();
    return True;

} catch (PDOException $e) {
    throw $e;
}
}