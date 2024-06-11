<html>
    <HEAD>
        <title>FIRST PAGE </title>
    </HEAD>
    <BODY>
        <form action="sum_digit.php" method="post">
            Enter first number : <input type="text" name="txtn1"/>
            
            <input type="submit" name="submitbtn" value="submit"/>
        </form>

        
    </BODY>    
</html>
<?php
    if(isset($_POST["submitbtn"]) && isset($_POST["txtn1"]))
    {
        $no = (int)$_POST["txtn1"];
        //$no = 12345;
        $sum = 0;
        while($no >0)
        {
            $r = $no%10;
            $sum = $sum + $r;
            $no = (int)$no/10;
        }
        echo $sum;
    }

 
?>
 