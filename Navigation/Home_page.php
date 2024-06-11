<?php

    if(isset($_REQUEST['admin'])){
        $usrname = $_REQUEST['admin'];
        echo "Welcome ". $usrname;
    }
    else{
        header("Location:Login.php");
    }