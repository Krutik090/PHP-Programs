<html>
    <HEAD>
        <title>FIRST PAGE </title>
    </HEAD>
    <BODY>
        <form action="armstong.php" method="post">
            Enter number : <input type="text" name="txtn1"/>
            
            <input type="submit" name="submitbtn" value="submit"/>
        </form>

        
    </BODY>    
</html>
<?php
    if(isset($_POST["submitbtn"]) && isset($_POST["txtn1"]))
    {
        $no = (int)$_POST["txtn1"];
        //$no = 153; is armstrong
        
        $temp =  $no;
        $arms = 0;
        while($no >0)
        {
            $r = $no%10;
            $arms = $arms +($r*$r*$r);
            $no = (int)$no/10;
        }
        if($arms == $temp){
            echo "$temp is armstrong";
        }
        else{
            echo "$temp not  armstrong";
        }
    }

   
 
?>