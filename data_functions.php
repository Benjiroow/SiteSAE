<?php

function constructPokedex(array $pokemons, array $types): array
{
    $pokedex = [];
    foreach ($pokemons as $key => $pokemon){
        $pokedex[$key] = [
            'num' => $pokemon['num'],
            'nom' => $pokemon ['nom'],
            'types' => $types[$key],
        ];
    }
    return $pokedex;
}