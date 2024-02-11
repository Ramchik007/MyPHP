<?php
//Составить программу вывода на экран числа, вводимого с клавиатуры. 
//Выводимому числу должно предшествовать сообщение "Вы ввели число".


$exitFromInput = true;
while ($exitFromInput == true) {

    $userInput = readline("Введите число!Для выхода введите 'q':");
    if ($userInput == 'q') {
        printf("Выход из программы...");
        break;
    }
    else if (is_numeric($userInput)) {
        printf("Вы ввели число $userInput\n");
    }
    else {
        printf("Ошибка ввода ,Вы ввели $userInput попробуйте снова!\n");
    }

}
