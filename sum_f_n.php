//to find the sum of first and last digit of a given number.
<html>
    <HEAD>
        <title> FIRST PAGE </title>
    </HEAD>
    <BODY>
        <form action="sum_f_n.php" method="post">
            Enter number : <input type="text" name="txtn1"/>
            
            <input type="submit" name="submitbtn" value="submit"/>
        </form>
    </BODY>    
</html>
<?php
    if(isset($_POST["submitbtn"]) && isset($_POST["txtn1"]))
    {
        $no = (int)$_POST["txtn1"];
    
        
        $temp =  $no;
        $sum = 0;
        $arr = array();
        while($no >=1)
        {
            $r = $no%10;
            array_push($arr , $r);
            $no = (int)$no/10;
            
        }
        $first = $arr[0];
        $last = $arr[count($arr)-1];
       $sum = $first + $last ;
       echo "sum of $first and $last is $sum";
    }

   
 
?>