<html>
    <body>
        <form action="dynamic table.php" method="post">
            Enter row : <input type="text" name="txtn1"/> <br/>
            Enter column : <input type="text" name="txtn2"/><br/>
            <input type="submit" name="submitbtn" value="submit"/>
<?php  
            $r = 0;
            $c = 0;
            if(isset($_POST["submitbtn"]))
        {
            if(isset($_POST["txtn1"]) && isset($_POST["txtn2"]))
            {
                $r = $_POST["txtn1"];
                $c = $_POST["txtn2"];

                
            }
        }
     
        echo "<table border='2px' style ='border-color:red; background-color:yellow'>";
             for($i=1;$i<=$r;$i++)
            {
                echo "<tr>";  
                for($j=1;$j<=$c;$j++)
                {
                    echo "<td>";
                    echo "$i,$j";
                    echo "</td>";
                }  
                echo "</tr>";            
            }
            echo "</table>";
?>            
        </form>   
    </body>
</html>