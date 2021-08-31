<?php

/*
function printMsg () {

    echo "Hello World";

}

printMsg();
*/


function sum2numbers ( int $x , int $y = 4 ) {

   $z = $x + $y ;

   echo $z;

}


echo sum2numbers (5 , 7);