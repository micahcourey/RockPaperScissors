<?php
    class RockPaperScissors
    {
        function playRockPaperScissors($input1, $input2)
        {
            $input1 = strtolower($input1);
            $input2 = strtolower($input2);

            if (!($input1 == "rock" || $input1 == "scissors" || $input1 == "paper" || $input2 == "rock" || $input2 == "scissors" || $input2 == "paper")) {
                return "Someone didn't enter a valid weapon!";
            } else {
                $rockpaperscissors = array(
                    "rock" => array(
                        "rock" => "It's a tie!",
                        "paper" => "Player two wins!",
                        "scissors" => "Player one wins!"
                    ),
                    "paper" => array(
                        "rock" => "Player one wins!",
                        "paper" => "It's a tie!",
                        "scissors" => "Player two wins!"
                    ),
                    "scissors" => array(
                        "rock" => "Player two wins!",
                        "paper" => "Player one wins!",
                        "scissors" => "It's a tie!"
                    )
                );
                return $rockpaperscissors[$input1][$input2];
            }
        }
    }
?>
