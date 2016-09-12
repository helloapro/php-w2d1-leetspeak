<?php

    class Leetspeak
    {
        function makeLeetspeak_oneWord($input)
        {
            $input = "I think leet speak is neat!";
            $leetPhrase = array();

            $inputPhrase = str_split($input);

            foreach ($inputPhrase as &$character) {
                if (($character == "e") || ($character == "E")) {
                    $character = "3";
                }
                if (($character == "o") || ($character == "O")) {
                    $character = "0";
                }
                if ($character == "I") {
                    $character = "1";
                }
                if (($character == "s") || ($character == "S")) {
                    $character = "5";
                }
                if ($character == "a") {
                    $character = "@";
                }
                array_push($leetPhrase, $character);
            }

            return implode("", $leetPhrase);
        }
    }
?>
