<?php
    class RockPaperScissors
    {
        function playRockPaperScissors($input1, $input2)
        {
            $input1 = strtolower($input1);
            $input2 = strtolower($input2);

            if (($input1 == "rock") && ($input2 == "scissors")) {
                return "Player one wins!";
            } elseif (($input1 == "scissors") && ($input2 == "paper")) {
                return "Player one wins!";
            } elseif (($input1 == "paper") && ($input2 == "rock")) {
                return "Player one wins!";
            } elseif (($input1 == "scissors") && ($input2 == "rock")) {
                return "Player two wins!";
            } elseif (($input1 == "paper") && ($input2 == "scissors")) {
                return "Player two wins!";
            } elseif (($input1 == "rock") && ($input2 == "paper")) {
                return "Player two wins!";
            } else {
                return "It's a tie!";
            }
        }
    }
?>
