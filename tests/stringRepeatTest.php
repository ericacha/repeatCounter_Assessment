<?php

    require_once "src/repeatCountGenerator.php";

    class stringRepeatTest extends PHPUnit_Framework_TestCase
    {

        function test_countRepeats_letter()
        {

          //Arrange
          $test_RepeatCounter = new RepeatCounter;
          $input = "A";

          //Act
          $result = $test_RepeatCounter->countRepeats($input);

          //Assert
          $this->assertEquals(1, $result);

        }


    }



?>
