<?php

//ONE WAY TO DO IT : 
function sortBubble(array $arr): array
{
    $can_swap = false;
    do {
        $can_swap = false;

        //Loop until we cannot compare one element with empty :
        for ($i = 0; $i < count($arr) - 1; $i++) {
            //Check if the left value is sup of his right value :
            if ($arr[$i] > $arr[$i + 1]) {
                $can_swap = true;

                //Define a temp variable which will be used to store the left value to swap it
                //So inside the temp_val will be the sup value and inside the sup value will be the min value
                $temp_val = $arr[$i];

                //swap the value : 
                $arr[$i] = $arr[$i + 1];
                $arr[$i + 1] = $temp_val;
            }
        }
    } while ($can_swap);

    return $arr;
}

//OTHER WAY : 
function sortBubbleTwo(array $arr): array
{
    //Loop until we cannot compare one element with empty :
    for ($i = 0; $i < count($arr) - 1; $i++) {
        for ($j = $i + 1; $j < count($arr) - 1; $j++) {
            //Check if the left value is sup of his right value :
            if ($arr[$i] > $arr[$j]) {
                //Define a temp variable which will be used to store the left value to swap it
                //So inside the temp_val will be the sup value and inside the sup value will be the min value
                $temp_val = $arr[$i];

                //swap the value : 
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp_val;
            }
        }
    }

    return $arr;
}

//ONE WAY THAT I SAW PEOPLE USE A LOT DUNNO WHY : 
function sortBubbleThree(array $arr): array
{
    //Loop until we cannot compare one element with empty :
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr) - 1; $j++) {
            //Check if the left value is sup of his right value :
            if ($arr[$j] > $arr[$j + 1]) {
                //Define a temp variable which will be used to store the left value to swap it
                //So inside the temp_val will be the sup value and inside the sup value will be the min value
                $temp_val = $arr[$j];

                //swap the value : 
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp_val;
            }
        }
    }

    return $arr;
}
