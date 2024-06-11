<html>
    <head>
        user Table 
    </head>
    <body>
        <form action='table.php' method="post">
            Enter number: <input type="txt" name ="txtno"/> <br/>
            <input type="submit" name='btnsub' value="Create table"/>
        </form>
    </body>
</html>

<?php

if(isset($_POST['btnsub']))
{
    if(isset($_POST['txtno']))
    {
        $n = $_POST['txtno'];

        for($i=1;$i<=10;$i++)
        {
            echo $n. "x" . "$i" . "=" . $n*$i."<br>"; 
        }
    }
}

?>