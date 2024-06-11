 <?php 
 
        $mark1 = 68;
        $mark2 = 48;
        $mark3 = 38;
        
        $total = $mark1 + $mark2 + $mark3;

        $per = $total / 3;

        if($mark1 > 35 && $mark2 >35 && $mark3 >35)
        {
            if($per>= 70)
            {
                echo "distinction";
            }
            elseif($per>=60 && $per<=70)
            {
                echo "firstclass";
            }
            elseif($per>=48 && $per<=60)
            {
                echo "second class";
            }
        }

        else
        {
            echo "fail";
        }
       
 ?>
