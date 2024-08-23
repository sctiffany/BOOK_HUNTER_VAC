<?php
// Qui dit fonctions dit namespace
namespace Core\Helpers;

function truncate(string $string, int $lg_max = 100): string
{
    if (strlen($string) > $lg_max) {
        // Si la chaîne de caractère est plus grande :
        $string = substr($string, 0, $lg_max);
        // Je la coupe de 0 à 100
        $last_space = strrpos($string, " ");
        // Je cherche la dernière position d'un espace
        return substr($string, 0, $last_space) . "...";
    }
    return $string;
}
