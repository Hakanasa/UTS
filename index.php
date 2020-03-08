<?php
    ini_set('error_reporting', 0);
    ini_set('display_errors', 0);
    session_start();
    if(isset($_POST['loc'])){
        $loc=$_POST['loc'];
    }else if($_SESSION['status'] != 'login'){
            $loc='login.php';
    }else {
        $loc='data.php';
    }
    include 'include/db_connect.php';
    include 'model/user.php';
    include 'model/comment.php';
    include 'model/timeline.php';
    if(isset($_POST['do'])) include 'controller/' . $_POST['do'];
    include 'view/' . $loc;
    include 'include/db_disconnect.php';
?>