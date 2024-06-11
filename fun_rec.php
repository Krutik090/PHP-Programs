<?php

// fucntion recursion

    function fact($no)
    {
        if($no == 1 )
        {
            return 1;
        }
        else
        {
            return $no * fact($no-1);
        }
    }
    $no = 5;
    $c = fact($no);

    echo "Factorial of $no is $c";