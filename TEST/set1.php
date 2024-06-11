<!DOCTYPE html>
<html lang="en">
<head>
    <title>SET 1</title>
</head>
<body>
    <form mathod="POST" action="set1.php" enctype="multipart/form-data">
        <table border="1" align='center'>
            <tr>
                <td> Employee ID:</td>
                <td> <input type="text" name ="eid"/></td>
            </tr>
            <tr>
                <td> Employee Image:</td>
                <td> <input type="file" name ="ephoto"/></td>
            </tr>
            <tr>
                <td> Employee Name:</td>
                <td> <input type="text" name ="ename"/></td>
            </tr>
            <tr>
                <td> Employee Gender:</td>
                <td> <input type="radio" name ="egen" value="male"/> Male
                 <input type="radio" name ="egen" value="female">Female </td>
            </tr>
            <tr>
                <td> Employee Gender:</td>
                <td> <input type="date" name ="edob"/></td>
            </tr>
            <tr>
                <td> Employee Contect:</td>
                <td> <input type="text" name ="econ"/></td>
            </tr>
            <tr>
                <td> Employee Address:</td>
                <td> <textarea rows='5' cols='10' name="eaddr" ></textarea></td>
            </tr>
            <tr>
                <td> Employee desegnation:</td>
                <td> 
                    <select name="edesg">
                        <option value='C.E.O'> C.E.O</option>
                        <option value='team leader'> team leader</option>      
                        <option value='programmer'> programmer</option>  
                    </select> 
                </td>
            </tr>
            <tr>
                <td> Employee Salary:</td>
                <td> <input type="number" name ="esal"/></td>
            </tr>
            <tr align="center">
                <td colspan="2">
                    <input type="submit" name="btninsert" value="INSERT"/>
                    <input type="submit" name="btnupdate" value="UPDATE"/>
                    <input type="submit" name="btndelete" value="DELETE"/>
                    <input type="submit" name="btnselect" value="VIEW"/>
                </td>
            </tr>

        </table>
    </form>
</body>
</html>

<?php
    include "crud.php";
    $obj =new Mydb();
    if(isset($_POST['btninsert'])){ 
        $obj->insert();
    }
?>