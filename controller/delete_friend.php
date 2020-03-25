<?php
    session_start();
        $user_Sekarang = $_SESSION['username'];
        $username_teman = $_SESSION['friend_ids'];

        $delete_sql = "DELETE FROM friend WHERE username='$user_Sekarang' and friend='$username_teman'";

        $result=mysqli_query($conn,$delete_sql);
        if($result==1){
            echo '<script>alert("Berhasil Delete");</script>';
        }else{
            echo '<script>alert("Gagal Delete !");</script>';
        }
        header("location: index.php");
?>
