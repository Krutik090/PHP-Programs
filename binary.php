//to check wether the enter number is binary or not

<html>
    <HEAD>
        <title>FIRST PAGE </title>
    </HEAD>
    <BODY>
        <form action="binary.php" method="post">
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
        $flag = true;
        
        while($no >=1)
        {
            $r = $no%10;
            if($r == 1 || $r == 0){
                $flag == true;
            }else{
                $flag = false;
            }
            $no = (int)$no/10;  
        }

       if($flag)
       {echo "<br>$temp is binary";}
       else
       {echo"<br>$temp is not binary";}
    
    }
   
 
?>