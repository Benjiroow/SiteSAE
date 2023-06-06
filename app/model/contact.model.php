<?php

function insertNewContact(string $mailC, string $nomC, string $prenomC, string $messageC, PDO $db): bool 
{
    try{
    $sql ="INSERT INTO contact (mail, nom, prenom, message)
            VALUES (:mailContact, :nomContact, :prenomContact, :messageContact)";
    $stmt = $db->prepare($sql);
    $stmt->bindValue('mailContact', $mailC);
    $stmt->bindValue('nomContact', $nomC);
    $stmt->bindValue('prenomContact', $prenomC);
    $stmt->bindValue('messageContact', $messageC);
    $stmt->execute();
    return True;

} catch (PDOException $e) {
    throw $e;
}
}



