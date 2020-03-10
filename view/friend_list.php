<?php
            session_start();
            $user_Sekarang = $_SESSION['username'];
            $sql = "SELECT * FROM friend where username = '$user_Sekarang'";
            $result = $conn -> query($sql);

            

            
?>