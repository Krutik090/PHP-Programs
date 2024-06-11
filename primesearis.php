<html>
    <head>
        prime searis 
    </head>
    <body>
        <form action='primesearis.php' method="post">
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
        $n = $_POST['txtno']; //number of prime number generated
        $num = 1; //Staring number 
        $temp = 0; $sum=0; 

        while ($temp < $n)
        {
            $flag=1;
            for($i=2;$i*$i<=$num;$i++);
            {
                if($num%$i == 0)
                {
                    $flag = 0;
                    break;
                }
            }
            if($flag ==1)
            {
                $sum+= $num;
                echo $sum.",";
                $temp++;
            }
            $num++;

        }
    }
    
}

?>