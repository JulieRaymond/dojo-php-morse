<?php

namespace App;

class Morse
{
    const MORSE = [
        "-.-.--" => "!",
        "....-" => "4",
        "..--.." => "?",
        "--..--" => ",",
        ".-.-.-" => ".",
        "..---" => "2",
        "...--" => "3",
        "--..." => "7",
        "-...." => "6",
        "....." => "5",
        "---.." => "8",
        "-..." => "B",
        "----." => "9",
        ".--." => "P",
        "-----" => "0",
        "--.." => "Z",
        "-.--" => "Y",
        "-..-" => "X",
        "-.-." => "C",
        "...-" => "V",
        ".----" => "1",
        "..-." => "F",
        "...." => "H",
        ".---" => "J",
        "--.-" => "Q",
        "-..-." => "/",
        ".-.." => "L",
        "..." => "S",
        "---" => "O",
        "-.-" => "K",
        ".-." => "R",
        "..-" => "U",
        "-.." => "D",
        ".--" => "W",
        "--." => "G",
        "-." => "N",
        "--" => "M",
        ".." => "I",
        ".-" => "A",
        "-" => "T",
        "." => "E",
    ];

    public function convertToLetters(string $str): string
    {
        $morseWords = explode('   ', $str);
        $result = [];

        foreach ($morseWords as $morseWord) {
            $morseLetters = explode(' ', $morseWord);
            $decodedWord = '';

            foreach ($morseLetters as $morseLetter) {
                if (array_key_exists($morseLetter, self::MORSE)) {
                    $decodedWord .= self::MORSE[$morseLetter];
                }
            }
            $result[] = $decodedWord;
        }

        return implode(' ', $result);
    }
}
$morse = new MORSE();
$morseCode = ".... . .-.. .-.. ---   .... . .-.. .-.. ---";
$decodedText = $morse->convertToLetters($morseCode);
echo $decodedText;
