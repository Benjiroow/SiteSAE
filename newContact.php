<?php
session_start();

require_once 'app/model/contact.model.php';
require_once 'app/model/dataConnection.php';
require_once 'config.php';



$databaseConnection = getDatabaseConnection();
$mailC = $_POST['mail'];
$nomC = $_POST['nom'];
$prenomC = $_POST['prenom'];
$messageC = $_POST['message'];


try {
    insertNewContact($mailC, $nomC, $prenomC, $messageC, $databaseConnection);
    $msgContact = "Votre message à bien été prise en compte, nous vous répondrons dans les plus brefs délais.";
}catch (PDOException $e) {
    $msgContact = "Il y a eu un problème lors de l'envoi de votre message";
}

$_SESSION['message'] = $msgContact;


header('location:' . URL . 'contact.php');
