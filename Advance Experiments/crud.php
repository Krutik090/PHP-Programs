<?php
class Mydb{
    var $con;
    function __construct()
    {
        $this->con = new mysqli("localhost","root","","empdb");
    }

    function insert(){
        $qry ="INSERT INTO emptable(EID,EPHOTO,ENAME,EGENDER,EDOB,ECON,EADDR,EDESG,ESAL) VALUES(?,?,?,?,?,?,?,?,?)";
        $stmt= $this->con->prepare($qry);
        $stmt->bind_param("issssissi",$eid,$ephoto,$ename,$egender,$edob,$econ,$eaddr,$edesg,$esal);
        $eid = $_POST['eid'];
        $ephoto = "Uploadedfile/".$eid.".jpeg";
        $ename = $_POST['ename'];
        $egender = $_POST['egen'];
        $edob = $_POST['edob'];
        $econ = $_POST['econ'];
        $eaddr = $_POST['eaddr'];
        $edesg = $_POST['edesg'];
        $esal = $_POST['esal'];
        move_uploaded_file($_FILES['ephoto']['tmp_name'],$ephoto);
        $stmt->execute();
        
    }
}