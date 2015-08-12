<?php

    require_once "src/RockPaperScissors.php";

    class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
    {

        function test_rock_scissors()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $input1 = "rock";
            $input2 = "scissors";

            //Act
            $result = $test_RockPaperScissors->playRockPaperScissors($input1, $input2);

            //Assert
            $this->assertEquals("Player one", $result);
        }

        function test_input_case()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $input1 = "ROCK";
            $input2 = "sCiSsors";

            //Act
            $result = $test_RockPaperScissors->playRockPaperScissors($input1, $input2);

            //Assert
            $this->assertEquals("Player one", $result);
        }

        function test_scissors_paper()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $input1 = "scissors";
            $input2 = "paper";

            //Act
            $result = $test_RockPaperScissors->playRockPaperScissors($input1, $input2);

            //Assert
            $this->assertEquals("Player one", $result);
        }

        function test_paper_rock()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $input1 = "paper";
            $input2 = "rock";

            //Act
            $result = $test_RockPaperScissors->playRockPaperScissors($input1, $input2);

            //Assert
            $this->assertEquals("Player one", $result);
        }

        function test_scissors_rock()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $input1 = "scissors";
            $input2 = "rock";

            //Act
            $result = $test_RockPaperScissors->playRockPaperScissors($input1, $input2);

            //Assert
            $this->assertEquals("Player two", $result);
        }

    }

?>
