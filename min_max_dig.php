//smallest and largest digits in the given number 
//85924
<html>
    <HEAD>
        <title>FIRST PAGE </title>
    </HEAD>
    <BODY>
        <form action="min_max_dig.php" method="post">
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
        $arr = array();
        while($no >=1)
        {
            $r = $no%10;
            array_push($arr , $r);
            $no = (int)$no/10;
            
        }
       echo "The minimum is".min($arr)."<br>";
       echo "The maximum is".max($arr)."<br>";
    }

   
 
?>