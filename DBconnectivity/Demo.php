<?php
    $con = mysqli_connect('localhost','root','','student') or die("not connected");
    $qry = "SELECT MAX(RNO) AS RNO FROM TBLSTUDENT";
    $res = mysqli_query($con,$qry);
    $rno = 1;
    if(mysqli_num_rows($res)>0){
        $row = mysqli_fetch_assoc($res);
        $rno = ((int)$row['RNO']) + 1;
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Demo.php" method="POST">
        <br><br><br><br>
        <table border="2px" align="center">
        <tr>
            <td>Enter Roll Number: </td>
            <td><input type="text" name="txtrno" value="<?php echo $rno ?>" /></td>
        </tr>
        <tr>
            <td>Enter name: </td>
            <td><input type="text" name="txtname" /></td>
        </tr><tr>
            <td>Enter Address: </td>
            <td><textarea rows="4" cols="21" name="txtaddr"></textarea></td>
        </tr><tr>
            <td>Enter Pin Code </td>
            <td><input type="text" name="txtpincode" /></td>
        </tr>
        <tr>
            <td>Enter Contact No. </td>
            <td><input type="text" name="txtcno" /></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="btnInsert" value="Insert" />
                <input type="submit" name="btnUpdate" value="Update" />
                <input type="submit" name="btnDelete" value="Delete" />
         </td>
           
        </tr>
    </table>
    </form>
</body>
</html>

<?php
    extract($_REQUEST);
    if(isset($_POST['btnInsert'])){
        $q="INSERT INTO TBLSTUDENT VALUES
        (".$txtrno.",
        '".$txtname."',
        '".$txtaddr."',
        ".$txtpincode.",
        ".$txtcno.");";
        mysqli_query($con,$q) or die("not Inserted");
    }

    if(isset($_POST['btnUpdate'])){
            $qry="UPDATE  TBLSTUDENT SET
            RNAME ='".$txtname."',
            RADDR ='".$txtaddr."',
            RPIN =".$txtpincode.",
            RCNO =".$txtcno."
            WHERE 
            RNO = ".$txtrno."";
            mysqli_query($con,$qry) or die("not UPDATED");
       

    }

    if(isset($_POST['btnDelete']))
    {
        $qry="DELETE FROM TBLSTUDENT WHERE RNO = RNO = ".$txtrno."";
            mysqli_query($con,$qry) or die("not UPDATED");
    }

    
?>


