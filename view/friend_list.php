<?php
            session_start();
            $user_Sekarang = $_SESSION['username'];
            $sql = "SELECT * FROM friend where username = '$user_Sekarang'";
            $result = $conn -> query($sql);
            $user=array();

            foreach($result as $row)
            array_push(
                $user,
                    new Friend(
                        $row['username'],
                        $row['friend']
                    )
            );
            
            foreach($user as $row){
                echo $row->getFriend()."<br>";
            }
?>