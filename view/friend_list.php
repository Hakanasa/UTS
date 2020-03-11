<!DOCTYPE html>
<html lang="en">
<head>
  <title>Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<form action = "index.php" method="post">
<?php
            session_start();
            $i = 0;
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
                $sql_friend = "SELECT * FROM friend,user
                     where user.username = '" . $row->getUsername() . "' group by friend.friend;";
                $hasil_friend = $conn -> query($sql_friend);
                foreach($user_fr as $row_fr){
                   
     
                    while($row3 = $hasil_friend->fetch_assoc()) {
                 
                        if($row->getUsername() == $row3['friend']){
                            echo '<form method="post" action="index/php">';
                            echo $row3['nama_depan'].' '.$row3['nama_belakang'].'<br>';
                          $asd[$i] = $row3['username'];
                          echo $asd[$i];
                          echo $i;
                        
                          
                            echo "<input type='hidden' name='friend_user' value='".$asd[$i]."'>";

                            echo "<input type='hidden' name='loc' value='halaman_teman.php'>";
                            echo "<button type='submit' name='submit'>Kunjungi Halaman</button>";
                   
                            echo "</form>";
                          
                          
                            $i++;
                        }
                    
                       }
             
                }
              
            }
?>
</form>
<form action = "index.php" method="post">
<input type='hidden' name='loc' value='data.php'>
<button type="submit" class="btn btn-secondary" value="data.php">Back</button>
</form>
</body>
</html>