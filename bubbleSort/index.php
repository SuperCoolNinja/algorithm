<?php

require_once('logic.php');

//USAGE :
$arr = [5, 15, 0, 3, 6, 8, 2, 7, 9, 4, 1, 10, 12, 16, 11, 17, 14, 18, 13, 19, 20];

//BEFORE THE SORT :
foreach ($arr as $number)
    printf("[BEFORE] = %d \n", $number);


printf("\n\n\n\n");
printf("\n\n\n\n");


//AFTER THE SORT :
foreach (sortBubble($arr) as $number)
    printf("[AFTER] = %d \n", $number);
