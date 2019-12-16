<?php

//choose the first randomnumber from 1 to 6
$randomNumber1 = ceil(rand(1,6));
//echo "randomNumber1=$randomNumber1 <br>";

//choose the second randomnumber from 1 to 6
$randomNumber2 = ceil(rand(1,6));
//echo "randomNumber2=$randomNumber2<br>";


//img for the randomNumber1
$randomImgSource1 ='images/dice'. $randomNumber1 .'.png';
//echo $randomImgSource1;

//img for the randomNumber2
$randomImgSource2 = 'images/dice' . $randomNumber2 . '.png';
//echo $randomImgSource2;




