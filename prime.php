<html>
    <head>
        user Table 
    </head>
    <body>
        <form action='prime.php' method="post">
            Enter number: <input type="txt" name ="txtno"/> <br/>
            <input type="submit" name='btnsub' value="Check"/>
        </form>
    </body>
</html>

<?php

if(isset($_POST['btnsub']))
{
    if(isset($_POST['txtno']))
    {
        $n = $_POST['txtno'];
        $isprime = 1;
        for($i = 2; $i <(int)($n/2);$i++)
        {
            if($n % $i == 0)
            {
                echo "$n  is not a prime number ";
                $isprime = 0;
                break;
            }
        }
        if($isprime == 1)
        {
            echo "$n is prime number";
        }
    }
}

?>