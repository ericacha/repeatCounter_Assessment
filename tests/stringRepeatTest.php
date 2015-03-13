<?php

    require_once "src/repeatCountGenerator.php";

    class stringRepeatTest extends PHPUnit_Framework_TestCase
    {

        function test_countRepeats_letter()
        {

          //Arrange
          $test_RepeatCounter = new RepeatCounter;
          $inputLetters = "A";
          $inputWords = "A";


          //Act
          $result = $test_RepeatCounter->countRepeats($inputWords, $inputLetters);

          //Assert
          $this->assertEquals(2, $result);

        }

        // function test_countRepeats_AA()
        // {
        //
        //   //Arrange
        //   $test_RepeatCounter_AA = new RepeatCounter;
        //   $input = "A,A";
        //
        //   //Act
        //   $result = $test_RepeatCounter_AA->countRepeats($input);
        //
        //   //Assert
        //   $this->assertEquals(2, $result);
        //
        // }

    }



?>
