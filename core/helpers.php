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

function slugify(string $string): string
{
    // Strip html tags
    $string = strip_tags($string);
    // Replace non letter or digits by -
    $string = preg_replace('~[^\pL\d]+~u', '-', $string);
    // Transliterate
    setlocale(LC_ALL, 'en_US.utf8');
    $string = iconv('utf-8', 'us-ascii//TRANSLIT', $string);
    // Remove unwanted characters
    $string = preg_replace('~[^-\w]+~', '', $string);
    // Trim
    $string = trim($string, '-');
    // Remove duplicate -
    $string = preg_replace('~-+~', '-', $string);
    // Lowercase
    $string = strtolower($string);
    // Check if it is empty
    if (empty($string)) {
        return 'n-a';
    }
    // Return result
    return $string;
}
