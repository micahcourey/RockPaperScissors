<?php
    class RockPaperScissors
    {
        function playRockPaperScissors($input1, $input2)
        {
            //Lowercase the user inputs.
            $input1 = strtolower($input1);
            $input2 = strtolower($input2);

            //Validate the user input by making a counter that counts the number of valid weapons.
            $weapons = array("rock", "paper", "scissors");
            $player_weapons = array($input1, $input2);
            $validate = 0;
            foreach ($weapons as $weapon) {
                foreach ($player_weapons as $player) {
                    if ($weapon == $player) {
                        $validate = $validate + 1;
                    }
                }
            }
            if ($validate < 2) {
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
