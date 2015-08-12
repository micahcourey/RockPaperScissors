<?php
    class RockPaperScissors
    {
        function playRockPaperScissors($input1, $input2)
        {
            $input1 = strtolower($input1);
            $input2 = strtolower($input2);

            if (($input1 == "rock") && ($input2 == "scissors")) {
              return "Player one";
            }
        }
    }
?>
