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
<body class="bg-secondary">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
  <a class="navbar-brand" name="loc" value="data.php" href="index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
    <div class="collapse navbar-collapse d-flex flex-row-reverse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <form action="index.php" method="post" class="px-2">
    		    <div>
                <button type='submit' name='loc' value='profile.php' class='btn btn-secondary' style="float: right">Profile</button>
    		    </div>
    	  </form>
        <form action="index.php" method="post" class="px-2">
    		    <div>
                <button type='submit' name='loc' value='list_users.php' class='btn btn-secondary' style="float: right">Add Friend</button>
    		    </div>
    	</form>
        <form action="index.php" method="post" class="px-2">
    		    <div>
                <input type='hidden' name='do' value='logout.php'>
                <button type='submit' name='loc' value='login.php' class='btn btn-secondary' style="float: right">Logout</button>
    		    </div>
    	</form>
      </ul>
    </div>
  </nav>

<div class="container pt-5 pr-5 pb-5 bg-light mt-3 mb-3">
            Under Construction. Sorry :(
            <!-- <div class="row content">
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
            </div> -->
            <form action = "index.php" method="post">
        <input type='hidden' name='loc' value='data.php'>
        <button type="submit" class="btn btn-secondary" value="data.php">Back</button>
        </form>
        </div>
</body>
</html>
