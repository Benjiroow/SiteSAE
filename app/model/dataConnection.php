<?php

function getDatabaseConnection(): PDO
{
    $dsn = 'sqlite:C:\wamp64\www\pokemonSem2\app\database\pokemon.sqlite';

    try { 
        $databaseConnection = new PDO($dsn);
        $databaseConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $databaseConnection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die("Erreur de connexion à la base de données : " . $e->getMessage());
    }
    return $databaseConnection;
}



