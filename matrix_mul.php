<?php
    $a = array(array(1,2,3),array(4,5,6),array(7,8,9));
    $b = array(array(3,4,5),array(5,5,6),array(2,5,7));

    for($i=0;$i<3;$i++)
    {
        for($j=0;$j<3;$j++)
        {
            for($k=0;$k<3;$k++)
            {
                $c[$i][$j] = $a[$i][$k] * $b[$k][$j];
            }
        }
    }

    print_r($c);