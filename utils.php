<?php

function convertType2Class(string $type): string
{
    $str = strtolower($type);
    return preg_replace('/(é|è)/', 'e', $str);   
}

function formatNumPokemon(int $num): string
{
    return sprintf('%03d', $num);
}


