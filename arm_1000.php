<?php
for($i=1;$i<=1000;$i++){
        $temp =  $i;
        $arms = 0;
        $no = $i;
        while($no >0)
        {
            $r = $no%10;
            $arms = $arms +($r*$r*$r);
            $no = (int)$no/10;
        }
        if($arms == $temp){
            echo "$temp is armstrong<br>";
        }
        
    }