<?php



if(isset($_GET['choice'])){

    $pick = $_GET['choice'];
}
else{
    $pick = 1;
}
$cpuChoice = rand(1,3);

require_once "Round.php";
(new Round())->saveStats($cpuChoice,$pick);

header('content-type: application/json');
echo json_encode(getWinner($pick,$cpuChoice));

function  getWinner ($pick,$cpuChoice){




    $winner = "";




    if($pick == 1){
        if($cpuChoice == 1){
            $winner = "tie";
        }
        elseif($cpuChoice == 2){
            $winner = "CPU";
        }
        elseif($cpuChoice == 3){
            $winner = "Player";
        }
    }
    elseif($pick == 2){
        if($cpuChoice == 1){
            $winner = "Player";
        }
        elseif($cpuChoice == 2){
            $winner = "tie";
        }
        elseif($cpuChoice == 3){
            $winner = "CPU";
        }
    }

    elseif($pick == 3){
        if($cpuChoice == 1){
            $winner = "CPU";
        }
        elseif($cpuChoice == 2){
            $winner = "Player";
        }
        elseif($cpuChoice == 3){
            $winner = "tie";
        }
    }


        return $winner;
}