<?php

class Game {
    
    public int $scoreTeam1;
    public int $scoreTeam2;
    //public string $result;
    //public string $winner = 'Not defined';

    public function score():void {
        printf("Score $this->scoreTeam1 : $this->scoreTeam2\n");

    }



    public function result():void {
        if ($this->scoreTeam1 == $this->scoreTeam2) {
            printf("It is draw\n");
            $this -> score();
        }
        else if ($this->scoreTeam1 > $this->scoreTeam2) {
            printf("Team1 win\n");
            $this -> score();
        }
        else if ($this->scoreTeam1 < $this->scoreTeam2) {
            printf("Team2 win\n");
            $this -> score();
        }

    }


    public function __construct() {

        $this -> scoreTeam1 = 0;
        $this -> scoreTeam2 = 0;
    }


    public function play():void {


        While (True) {
            $choice = readline("1 - Team1 , 2 - Team2, 0 - quit:\n");

            if ($choice == "0") {
                $this -> result();
                break;
            }   

            else if($choice == '1') {
                $inputScore = readline("Enter score (1 or 2 or 3):");

                if($inputScore == '1' || $inputScore == '2' || $inputScore == '3') {
                    $this -> scoreTeam1 += (int)$inputScore;
                    $this -> score();                   
                }
                else {
                    printf("Error, score can be only 1,2 or 3\n");
                }
            }


            else if($choice == "2") {

                $inputScore = readline("Enter score (1 or 2 or 3):");

                if($inputScore == '1' || $inputScore == '2' || $inputScore == '3') {
                    $this -> scoreTeam2 += (int)$inputScore;
                    $this -> score();   
                    
                }
                else {
                    printf("Error, score can be only 1,2 or 3\n");
                }
            }
            else {
                printf("Input error!Choice can be '1' or '2' or '0'\n");
            }


        }

}
    }