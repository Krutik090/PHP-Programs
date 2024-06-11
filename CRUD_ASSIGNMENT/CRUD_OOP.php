<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <form action='CRUD_OOP.php' method="post" align='center'>
        no:<input type="text" name="rno"/><br>
        name:<input type="text" name="rname"/><br>
        addres:<input type="text" name="raddr"/><br>
        Pin:<input type="text" name="rpin"/><br>
        Contect:<input type="text" name="rcno"/><br>

        <input type="submit" name="btnsubmit" value="INSERT"/>
        <input type="submit" name="btnupdate" value="UPDATE"/>
        <input type="submit" name="btndelete" value="DELETE"/>
        <input type="submit" name="btnselect" value="VIEW"/>
    </form>
</body>
</html>


<?php

class CRUD{
    public $host = 'localhost';
    public $dbname = 'student';
    public $user = 'root';
    public $pass = '';

    public $con;
    function __construct(){
        $this->con = new mysqli($this->host,$this->user,$this->pass,$this->dbname);
        if($this->con->connect_error){
            echo "Not connected". $this->con->connect_error;
        }
    }

    function insert(){
        
            $st = $this->con->prepare("INSERT INTO tblstudent(RNO,RNAME,RADDR,RPIN,RCNO) VALUES(?,?,?,?,?)");
            $st->bind_param("issii",$rno,$rname,$raddr,$rpin,$rcno);
            $rno = (int)$_POST['rno'];
            $rname = $_POST['rname'];
            $raddr = $_POST['raddr'];
            $rpin = (int)$_POST['rpin'];
            $rcno = (int)$_POST['rcno'];
            if($st->execute()){
                echo "Record inserted successfully";
            }
            else{
                echo "Not Inserted";
            }
        
       
        $st->close();

    }
    function update(){
        $st = $this->con->prepare("UPDATE tblstudent SET RNAME=?,RADDR=?,RPIN=?,RCNO=? WHERE RNO=?");
        $st->bind_param("ssiii",$rname,$raddr,$rpin,$rcno,$rno);
        $rno = (int)$_POST['rno'];
        $rname = $_POST['rname'];
        $raddr = $_POST['raddr'];
        $rpin = (int)$_POST['rpin'];
        $rcno = (int)$_POST['rcno'];
        if($st->execute()){
            echo "Record Updated successfully";
        }
        else{
            echo "Not Updated";
        }
        $st->close();

    }
    function delete(){
        $st = $this->con->prepare("DELETE FROM tblstudent WHERE RNO = ?");
        $st->bind_param("i",$rno);
        $rno = (int)$_POST['rno'];
        if($st->execute()){
            echo "Record Deleted successfully";
        }
        else{
            echo "Not Deleted";
        }
        $st->close();

    }

    function select(){
        $qry = "SELECT * FROM TBLSTUDENT";
        $result = $this->con->query($qry);
        
        while($row = $result->fetch_assoc()){
            
            echo "Rno : " .$row['RNO'];
            echo "Rname : " .$row['RNAME'];
            echo "Raddress : " .$row['RADDR'];
            echo "Rpin : " .$row['RPIN'];
            echo "Rcontect : " .$row['RCNO']."<br>";
        }
    }
}

$obj = new CRUD();

if(isset($_POST['btnsubmit'])){
    if(!empty($_POST['rno']) && !empty($_POST['rname']) && !empty($_POST['raddr']) && !empty($_POST['rpin']) && !empty($_POST['rcno']))
    { 
        $obj->insert();
    }
    else{
        echo "All fields required";
    }
}

if(isset($_POST['btnupdate'])){
    if(!empty($_POST['rno']) && !empty($_POST['rname']) && !empty($_POST['raddr']) && !empty($_POST['rpin']) && !empty($_POST['rcno']))
    { 
        $obj->update();
    }
    else{
        echo "All fields required";
    }
}

if(isset($_POST['btndelete'])){
    if(!empty($_POST['rno']) )
    { 
        $obj->delete();
    }
    else{
        echo "RNO required";
    }
}


if(isset($_POST['btnselect'])){
    $obj->select();
}