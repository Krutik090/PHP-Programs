<?php

// Function with no argument no return value
/*
    function myfun()   // fucntion defination
    {
        echo "Function called <br>";
        echo "This is second line";
    }

    myfun(); // function call


//-------------------------------------------------
//with argument no return value

    function myfun($n)
    {
        echo "Fucntion called value is $n ";
    }

    myfun(13);
    myfun("Hello");


//------------------------------------------------

//No argument with Return value

function myfun()
{

    echo "Fucntion called <br>";

    return "this is the value lyo";
}

$c = myfun();
echo "$c";

*/
// With arguments with return value

    function sqr($n)
    {
        return ($n * $n);
     }

$v = sqr(5);
echo "Sqare is $v";