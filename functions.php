<?php

function printArr($numbers) {
    foreach ($numbers as $number){
        echo "$number <br>";
    }
}

function largest($numbers) {
    $largest = 0;
    foreach ($numbers as $number){
        $largest = $number;
    }

    echo "Largest number: $largest";
}

function removeDups($numbers) {
    $newArray = array_unique($numbers);
    foreach ($newArray as $number){
        echo "$number <br>";
    }
}

function distribution($numbers) {
    $filteredArray = array_unique($numbers);
    $newArray = array();

    foreach ($filteredArray as $numInterest){

        $count = 0;
        foreach ($numbers as $number){
            if ($number == $numInterest){
                $count++;
            }
        }
        $newArray[$numInterest] = $count;
    }

    foreach ($newArray as $newNums => $count){
        echo "Number distribution:  $newNums - $count <br>";
    }
}