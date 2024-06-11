<html>
    <head>
        <title>
            Regular Expression Demo
        </title>
    </head>
    <body>
        <form action="regularexpression.php" method="POST">
            
            Enter Mobile no: <input type="text" name="mno"/><br>
            Enter Email: <input type="text" name = "txtemail"/><br>
            <input type="submit" name="btnsubmit" />bjh kbb
        </form>

<?php
    if(isset($_POST['btnsubmit']))
    {
        if(isset($_POST['mno']))
        {
            $tmp = mb_ereg("^\d{10}$",$_POST['mno']);

            if($tmp == 1)
            {
                echo "valid Mobile Number"."<br>";
            }
            else{
                echo "Invalid Mobile Number"."<br>";
            }
        }

        if(isset($_POST['txtemail']))
        {
            if(mb_ereg("^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$",$_POST['txtemail'])==1)
            {
                echo "valid email address"."<br>";
            }
            else
            {
                echo "Invalid email address"."<br>";
            }

        }
    }
?>
    </body>
</html>