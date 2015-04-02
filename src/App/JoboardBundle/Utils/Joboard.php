<?php

// src/App/JoboardBundle/Utils/Joboard.php

namespace App\JoboardBundle\Utils;

class Joboard
{
    static public function slugify($text)
    {
        if (empty($text)) {
            return 'n-a';
        }
        // Замена пробелов на тире
        $text = preg_replace('/ +/', '-', $text);
        // Приведение текста к нижнему регистру
        $text = mb_strtolower(trim($text, '-'), 'utf-8');

        return $text;
    }
}