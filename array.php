<?php 

    $arr = array(35,20,65,12,78);
    
    echo "<br>";
    $max = $arr[0];
    $min = $arr[0];
   
    for($i=0;$i<5;$i++)
    {
        /*
        if($arr[$i] > $max)
        {
            $max = $arr[$i];
        }   
        if($arr[$i] < $min)
        {
            $min = $arr[$i];
        }
    }
    echo "$max,$min";
    */

        for($j=$i+1;$j<5;$j++)
        {
            if($arr[$i]>$arr[$j])
            {
                $temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;
            }
        }

}
print_r($arr);

?>
