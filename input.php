<html>
    <HEAD>
        <title>FIRST PAGE </title>
    </HEAD>
    <BODY>
        <form action="input.php" method="post">
            Enter first number : <input type="text" name="txtn1"/> <br/>
            Enter second number : <input type="text" name="txtn2"/><br/>
            <input type="submit" name="submitbtn" value="submit"/>
        </form>

        
    </BODY>    
</html>
<?php
        if(isset($_POST["submitbtn"]))
        {
            if(isset($_POST["txtn1"]) && isset($_POST["txtn2"]))
            {
                $n1 = $_POST["txtn1"];
                $n2 = $_POST["txtn2"];

                echo "sum of n1 and n2 is" . ($n1+$n2);
            }
        }

        ?>