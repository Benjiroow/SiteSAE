<?php
session_start();

require_once 'app/model/client.model.php';
require_once 'app/model/dataConnection.php';
require_once 'config.php';



$databaseConnection = getDatabaseConnection();
$mailClient = $_POST['mail'];
$nomClient = $_POST['nom'];
$prenomClient = $_POST['prenom'];
$ageClient = $_POST['age'];
$creditClient = $_POST['cartedecredit'];
$codepostalClient = $_POST['codepostal'];
$adresseClient = $_POST['adresse'];
$villeClient = $_POST['ville'];
$client = null;

try {
    $client = insertNewClient($mailClient, $nomClient, $prenomClient, $ageClient, $creditClient, $codepostalClient, $adresseClient, $villeClient, $databaseConnection);
    $msg = "Votre message à bien été prise en compte, nous vous répondrons dans les plus brefs délais.";
}catch (PDOException $e) {
    $msg = "Il y a eu un problème lors de l'envoi de votre message";
}



$_SESSION['message'] = $msg;

$num_client = $client['num_client'];
header('location:' . URL . "commande.php?num_client=$num_client");
