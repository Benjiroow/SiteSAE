<?php
require_once 'app/model/dataConnection.php';
require_once 'app/model/pokedex.model.php';

$databaseConnection = getDatabaseConnection();
$pokedex = getPokedexWhithoutTypes($databaseConnection);

