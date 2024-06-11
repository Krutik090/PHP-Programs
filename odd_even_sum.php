// write a programm to enter any number and print the total number of odd digits and even digits within the given number and also find out sum of them
for ex no = 23569
odd = 3
even = 2
sum of odd = 17
sum of even = 8
<html>
    <HEAD>
        <title>FIRST PAGE </title>
    </HEAD>
    <BODY>
        <form action="odd_even_sum.php" method="post">
            Enter first number : <input type="text" name="txtn1"/> <br/>
            
            <input type="submit" name="submitbtn" value="submit"/>
        </form>

        
    </BODY>    
</html>
<?php
    if(isset($_POST["submitbtn"]) && isset($_POST["txtn1"]))
    {
        $n = (int)$_POST["txtn1"];
        $e_count = 0;
        $o_count = 0;
        $e_sum = 0;
        $o_sum = 0;
        while($n>1)
        {
            $k = $n % 10;
            $n = (int)$n / 10;
            if($k == 0)
                {
                    continue;
                }
            else if($k % 2 == 0)
            {
                
                $e_sum = $e_sum + $k;
                $e_count++;
            } 
            else
            {
                $o_count++;
                $o_sum = $o_sum + $k;
            }
            
        }
        echo "odd num = $o_count and sum is $o_sum<br>";
        echo "even num = $e_count and sum is $e_sum<br>";
    }

?>

