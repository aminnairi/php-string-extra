<?php

declare(strict_types=1);

namespace Aminnairi\StringExtra;

class StringExtra
{
    public static function toSentenceCase(string $string): string
    {
        $characters = str_split($string);
        $words = [""];

        foreach ($characters as $character) {
            if (!ctype_alpha($character) && !ctype_digit($character)) {
                $words[] = "";
                continue;
            }

            $lastWordIndex = count($words) - 1;
            $lastWord = $words[$lastWordIndex];
            $lastWordLength = strlen($lastWord);

            if ($lastWordLength === 0) {
                $words[$lastWordIndex] .= $character;
                continue;
            }

            $lastWordLastCharacterIndex = strlen($lastWord) - 1;
            $lastWordLastCharacter = $lastWord[$lastWordLastCharacterIndex];

            if (ctype_lower($lastWordLastCharacter) && ctype_upper($character) || ctype_digit($lastWordLastCharacter) && ctype_alpha($character) || ctype_alpha($lastWordLastCharacter) && ctype_digit($character)) {
                $words[] = $character;
                continue;
            }

            $words[$lastWordIndex] .= $character;
        }

        $sentence = implode(" ", $words);
        $trimmedSentence = trim($sentence, " "); 
        $uppercasedSentence = ucfirst($trimmedSentence);

        return $uppercasedSentence;
    }
}
