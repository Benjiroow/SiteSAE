<?php

require_once "app/model/param.model.php";

function getClients( PDO $db): array
{
    $sql = "SELECT num_client AS num, nom FROM produit;";

    $stmt = $db->query($sql);

    $results = $stmt->fetchAll();
    return $results;
}

function getClientByEmail(string $email, PDO $db) 
{
    try {
        $sql = "SELECT num_client FROM client WHERE mail=:email;";
        $stmt = $db->prepare($sql);
        $stmt->bindValue('email', $email);
        $stmt->execute();
        $user = $stmt->fetch();

        return $user;

    } catch (PDOException $e) {
        throw $e;
    }
}


function insertNewClient(string $mailClient, string $nomClient, string $prenomClient, string $ageClient, string $creditClient, string $codepostalClient, string $adresseClient, string $villeClient, PDO $db): mixed
{
    try{
        $sql ="INSERT INTO client(mail, nom, prenom, age, carte_de_credit, code_postal, adresse, ville)
                VALUES (:mailClient,:nomClient,:prenomClient,:ageClient,:creditClient,:codepostalClient,:adresseClient,:villeClient);";
        $stmt = $db->prepare($sql);
        $stmt->bindValue('mailClient', $mailClient);
        $stmt->bindValue('nomClient', $nomClient);
        $stmt->bindValue('prenomClient', $prenomClient);
        $stmt->bindValue('ageClient', $ageClient);
        $stmt->bindValue('creditClient', $creditClient);
        $stmt->bindValue('codepostalClient', $codepostalClient);
        $stmt->bindValue('adresseClient', $adresseClient);
        $stmt->bindValue('villeClient', $villeClient);
        $stmt->execute();
    
        return getClientByEmail($mailClient, $db);

    } catch (PDOException $e) {
        throw $e;
    }
}

function GetCommandeByClient(int $num_client, PDO $db): mixed 
{
    $sql="SELECT date_commande, num_produit, quantite 
            FROM commande WHERE num_client = $num_client
            JOIN contenir ON commande.num_commande = contenir.num_commande;";

    $stmt = $db->query($sql);

    $results = $stmt->fetchAll();
    return $results;
}

function CommandeByClient(int $num_client, PDO $db): mixed 
{
    $sql = "INSERT INTO contenir(num_produit, num_commande, quantite)
            VALUES (:numProduit, :numCommande, :quantite)
            JOIN contenir ON commande.num_commande = contenir.num_commande;";
    
    $stmt = $db->query($sql);

    $results = $stmt->fetchAll();
    return $results;
}