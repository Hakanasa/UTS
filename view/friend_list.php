<form action = "index.php" method="post">
<?php
            session_start();
            $user_Sekarang = $_SESSION['username'];
            $sql_fr = "SELECT * FROM friend where username = '$user_Sekarang'";
            $result_fr = $conn -> query($sql_fr);
            $user_fr=array();

            $sql = "SELECT * FROM user";
            $result = $conn -> query($sql);
            $user=array();

            foreach($result as $row)
            array_push(
                $user,
                    new User(
                        $row['nama_depan'],
                        $row['nama_belakang'],
                        $row['tanggal_lahir'],
                        $row['jenis_kelamin'],
                        $row['username'],
                        $row['password'],
                        $row['gambar'],
                        $row['profile_deskripsi']
                    )
            );
        

            foreach($result_fr as $row_fr)
            array_push(
                $user_fr,
                    new Friend(
                        $row_fr['username'],
                        $row_fr['friend']
                    )
            );
            
            foreach($user as $row){
                
                foreach($user_fr as $row_fr){
                    $sql_friend = "SELECT * FROM friend,user
                         where user.username = '" . $row_fr->getFriend() . "' group by friend.friend;";
                    $hasil_friend = $conn -> query($sql_friend);
     
                    while($row3 = $hasil_friend->fetch_assoc()) {
               
                        if($row->getUsername() == $row3['friend'] ){
                            echo '<form method="post" action="index/php">';
                            echo $row3['nama_depan'].' '.$row3['nama_belakang'].'<br>';
                         //  echo $row3['username'];
                            echo "<input type='hidden' name='friend_user' value='".$row3['username']."'>";

                            echo "<input type='hidden' name='loc' value='halaman_teman.php'>";
                            echo "<button type='submit' name='submit'>Kunjungi Halaman</button>";
                            echo "</form>";
                        }
                       }
             
                }
              
            }
?>
<button type='submit' name='submit'>Back </button>
<input type='hidden' name='loc' value='data.php'>