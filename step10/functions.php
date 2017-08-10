<?php

$guestage = 12;
$minage = 21;

 function oldenough() 
{ 
    $guestage = 12;
    $minage = 21;

    if ($guestage < $minage) {
                    echo "You got some cycles around the sun to go through kid. Come back when you're a little more experienced.";
    }    else {
        echo "Welcome to Jelly Bear's Island of Sweets. The greatest club this side of rainbow road.";
    }
} 

