<?php
//require_once 'game.php';
$choice ='';
$step = 0;
$scoreTeam1 = 0;
$scoreTeam2 = 0;
$score = "$scoreTeam1 : $scoreTeam2\n";
//$winner ='';

printf("Game started!\n");
while ( True) {
    $choice = readline("1 - Team1 , 2 - Team2, 0 - quit:\n");
    if ($choice == "0") {

        if ($step > 0) {
                if ($scoreTeam1 > $scoreTeam2) { 
                    echo "Team1 is win!\n";
                    $score = "$scoreTeam1 : $scoreTeam2\n";
                    printf("Score $score\n");
                }
                else if ($scoreTeam1 < $scoreTeam2) {
                    echo "Team2 is win\n";
                    $score = "$scoreTeam1 : $scoreTeam2\n";
                    printf("Score $score\n");
                }
                else if ($scoreTeam1 == $scoreTeam2) {
                    echo "It is draw\n";
                    $score = "$scoreTeam1 : $scoreTeam2\n";
                    printf("Score $score\n");
                }
                break;         
                }        
            
        else { 
            printf("Game is not started, exit");
            break;
        }
    }
              
    else if($choice == '1') {
        $inputScore = readline("Enter score (1 or 2 or 3):");
        if($inputScore == '1' || $inputScore == '2' || $inputScore == '3') {
            $scoreTeam1 += (int)$inputScore;
            $score = "$scoreTeam1 : $scoreTeam2\n";
            printf("Score $score\n");
            $step += 1;
        }
        else {
            printf("Error, score can be only 1,2 or 3");
        }
    }
    else if($choice == "2") {
        $inputScore = readline("Enter score (1 or 2 or 3):");
        if($inputScore == '1' || $inputScore == '2' || $inputScore == '3') {
            $scoreTeam2 += (int)$inputScore;
            $score = "$scoreTeam1 : $scoreTeam2\n";
            printf("Score $score\n");
            $step += 1;
        }
        else {
            printf("Error, score can be only 1,2 or 3");
        }
    }
    else {
        printf("Input error!Choice can be '1' or '2' or '0'\n");
    }

}


