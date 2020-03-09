<?php
    ini_set('error_reporting', 0);
    ini_set('display_errors', 0);
    session_start();
    $user_Sekarang = $_SESSION['username'];
    $sql = "SELECT * FROM user where username !='$user_Sekarang'";
    $result = $conn -> query($sql);
    $user=array();

    foreach($result as $row)
    array_push(
        $user,
            new User(
                $row['nama_depan'],
                $row['nama_belakang'],
                $row['username'],
                $row['password'],
                $row['gambar'],
                $row['profile_deskripsi']
            )
    );
    foreach($user as $row){
        echo '<form method="post" action="index.php">';
        echo "<img class = 'round' width = '100px' height ='100px' src='gambar/".$row->getGambar()."' ><br>";
        echo $row->getNama_depan()."<br>";
        echo $row->getNama_belakang()."<br>";
        echo $row->getDeskripsi()."<br>";
        echo "<input type='hidden' name='user' value='".$row->getUsername()."'>";
        echo "<input type='hidden' name='do' value='add_friends.php'>"; 
        echo "<button name='submit' value='add_friends.php' class='btn btn-dark'>Add to Friend</button><br><br>";
        echo "<input type='hidden' name='loc' value='data.php'>"; 
        echo '</form>';
    }
?>