<?php
    require_once 'src/Leetspeak.php';

    class LeetspeakTest extends PHPUnit_Framework_TestCase
    {

        function test_makeLeetspeak_oneWord()
        {
            $test_Leetspeak = new Leetspeak;
            $input = "leet";

            $result = $test_Leetspeak->makeLeetspeak($input);

            $this->assertEquals("l33t", $result);
        }

    }
?>
