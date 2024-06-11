<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Session demo</title>
</head>
<body>
    <form action="home.php" method="post">
        Enter any number:
        <input type="text" name="txtno"/>
        <input type="submit" name="btnsubmit"/>
    </form>
</body>
</html>

<?php
    session_start();
    
    if(isset($_SESSION['i'])){
        
        $i = $_SESSION['i'];
        $j =  $i + 1;
        $_SESSION['i'] = $j;
        
    }
    else{
        $_SESSION['i'] = (int)$_POST['txtno'];
    }
    echo $_SESSION['i'];

?>