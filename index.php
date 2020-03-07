<?php

    if(isset($_POST['loc'])){
        $loc=$_POST['loc'];
    }else{
        $loc='login.php';
    }


    include 'include/db_connect.php';


    include 'model/user.php';
    include 'model/timeline.php';
    if(isset($_POST['do'])) include 'controller/' . $_POST['do'];
    include 'view/' . $loc;
    include 'include/db_disconnect.php'; 
?>
