<!DOCTYPE html>
<html lang="en">
<head>
    <title>Session demo</title>
</head>
<body>
    <form action="" method="post">
        Enter any number:
        <input type="text" name="txtno" />
        <input type="submit" name="btnsubmit" />
    </form>
</body>
</html>

<?php
    session_start();

    if(isset($_POST['btnsubmit'])){
        if(isset($_POST['txtno'])){
            $i = (int)$_POST['txtno'];
            echo  $i + 1;
            $_SESSION['i'] = $i + 1; // Increment the value and store it in session
        }
        else{
            echo "Please enter a valid number.";
        }
    }
    else{
        if(isset($_SESSION['i'])){
            $i = $_SESSION['i'];
            echo $i;
        }
    }
?>