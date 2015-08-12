<?php
    class RockPaperScissors
    {
        function playRockPaperScissors($input1, $input2)
        {
            $input1 = strtolower($input1);
            $input2 = strtolower($input2);

            $rockpaperscissors = array(
                "rock, scissors" => "Player one wins!",
                "scissors, paper" => "Player one wins!",
                "paper, rock" => "Player one wins!",
                "scissors, rock" => "Player two wins!",
                "paper, scissors" => "Player two wins!",
                "rock, paper" => "Player two wins!",
                "rock, rock" => "It's a tie!",
                "paper, paper" => "It's a tie!",
                "scissors, scissors" => "It's a tie"
            );

            $string = $input1 . ", " . $input2;
            return $rockpaperscissors[$string];
        }
    }
?>
