<html>
    <HEAD>
        <title>FIRST PAGE </title>
    </HEAD>
    <BODY>
        <form action="palindrom.php" method="post">
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
        $rev = 0;
        while($no >=1)
        {
            $r = $no%10;
            $rev = ($rev*10)+ $r;
            $no = (int)$no/10;
            
        }
       /* echo "$rev <br>";
        echo "$temp<br>"; */
        if($rev == $temp){
            echo "$temp is palindrom";
        }
        else{
            echo "$temp not palindrom";
        }
    }

   
 
?>