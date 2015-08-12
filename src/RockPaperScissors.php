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
    }
?>
<!-- array(['rock', 'paper', 'scissors'],
      ['rock', 'paper', 'scissors'],
      ['rock', 'paper', 'scissors']); -->
