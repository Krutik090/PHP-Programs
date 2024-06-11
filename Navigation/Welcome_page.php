<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome Page</title>
</head>
<body>
    <h1> Welcome page</h1>
</body>
</html>

<?php
    if(isset($_POST['txtname']) && isset($_POST['txtpass']));
    {
        $uname = $_POST['txtname'];
        $pass = $_POST['txtpass'];

        if($uname == "admin" && $pass = "1234")
        {
            header ("Location:Home_page.php?admin=$uname");
        }
        else{
            header("Location:Login.php");
        }
    }