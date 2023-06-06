<?php
session_start();

require_once 'app/model/contact.model.php';
require_once 'app/model/dataConnection.php';
require_once 'config.php';
require_once 'app/model/boutique.model.php';
require_once 'app/model/commande.model.php';



$databaseConnection = getDatabaseConnection();
$boutique = getBoutique(1, $databaseConnection);
$total = 0;


date_default_timezone_set('Europe/Paris');
$date = date('d-m-y h:i:s');

if (isset($num_client)){
    $num_client = $_GET['num_client'];
}else{
    $num_client = $_POST['numero_client'];
}

for ($i = 1; $i < 8; $i++) {
    $dateCommande = $date;   
    $numClient = $_POST['numero_client'];
    $numProduit = "00$i";
    $quantite = $_POST['quantite_produit'."00".$i];
    $prix = $boutique[$i]['prix'];
    $total = $total + $quantite*$prix;
    try {
        $client = insertNewCommande($dateCommande, $numClient, $numProduit, $quantite, $prix, $databaseConnection);
        $msgCommande = "Commande validée ☑️ Total : ".$total;
    }catch (PDOException $e) {
        $msgCommande = "Il y a eu un problème lors de la validation de votre commande.";
    }
}



$_SESSION['message'] = $msgCommande;


header('location:' . URL . 'commande.php');
