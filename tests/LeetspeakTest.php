<?php
    require_once 'src/Leetspeak.php';

    class LeetspeakTest extends PHPUnit_Framework_TestCase
    {

        function test_makeLeetspeak_oneWord()
        {
            $test_Leetspeak = new Leetspeak;
            $input = "I think leet speak is neat!";

            $result = $test_Leetspeak->makeLeetspeak_oneWord($input);

            $this->assertEquals("1 think l33t 5p3@k i5 n3@t!", $result);
        }

    }
?>
