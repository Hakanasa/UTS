<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>User</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <style>
    body{
    background:#FAFAFA;
}
.people-nearby .google-maps{
  background: #f8f8f8;
  border-radius: 4px;
  border: 1px solid #f1f2f2;
  padding: 20px;
  margin-bottom: 20px;
}

.people-nearby .google-maps .map{
  height: 300px;
  width: 100%;
  border: none;
}

.people-nearby .nearby-user{
  padding: 20px 0;
  border-top: 1px solid #f1f2f2;
  border-bottom: 1px solid #f1f2f2;
  margin-bottom: 20px;
}

img.profile-photo-lg{
  height: 80px;
  width: 80px;
  border-radius: 50%;
}

    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
      <a class="navbar-brand" name="do" value="data.php"href="index.php">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-flex flex-row-reverse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <form action="index.php" method="post" class="px-2">
              <div>
                  <input type='hidden' name='do' value='logout.php'>
                  <button type='submit' name='loc' value='login.php' class='btn btn-secondary' style="float: right">Logout</button>
              </div>
          </form>
          <form action="index.php" method="post" class="px-2">
              <div>
                  <button type='submit' name='loc' value='profile.php' class='btn btn-secondary' style="float: right">Profile</button>
              </div>
          </form>
        </ul>
      </div>
    </nav>
    <?php
        ini_set('error_reporting', 0);
        ini_set('display_errors', 0);
        session_start();
        $user_Sekarang = $_SESSION['username'];
        $sql = "select * from user where username not in(select user.username from user,friend where user.username != '$user_Sekarang' and friend.username ='$user_Sekarang' and friend.friend = user.username) and username != '$user_Sekarang'";
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

          echo '<div class="container">';
          echo '<div class="row">';
                echo'<div class="col-md-8">';
                    echo'<div class="people-nearby">';
        foreach($user as $row){
          echo '<form method="post" action="index.php">';
          echo'<div class="nearby-user">';
          echo'<div class="row">';
          echo'<div class="col-md-2 col-sm-2">';
          echo "<img class = 'profile-photo-lg' alt='user' src='gambar/".$row->getGambar()."'>";
          echo'</div>';
          echo'<div class="col-md-7 col-sm-7">';
          echo'<h5><a href="#" class="profile-link text-dark">'.$row->getNama_depan().' '.$row->getNama_belakang().'</a></h5>';
          echo'<p>'.$row->getDeskripsi().'</p>';
          echo'</div>';
          echo'<div class="col-md-3 col-sm-3">';
          echo "<input type='hidden' name='user' value='".$row->getUsername()."'>";
          echo "<input type='hidden' name='do' value='add_friends.php'>";
          echo"<button name='submit' value='add_friends.php' class='btn btn-dark pull-right'>Add Friend</button>";
          echo'</div>';
          echo'</div>';
          echo'</div>';
          echo '</form>';
            // echo '<form method="post" action="index.php">';
            // echo "<img class = 'round' width = '100px' height ='100px' src='gambar/".$row->getGambar()."' ><br>";
            // echo $row->getNama_depan()."<br>";
            // echo $row->getNama_belakang()."<br>";
            // echo $row->getDeskripsi()."<br>";
            // echo "<input type='hidden' name='user' value='".$row->getUsername()."'>";
            // echo "<input type='hidden' name='do' value='add_friends.php'>";
            // echo "<button name='submit' value='add_friends.php' class='btn btn-dark'>Add to Friend</button><br><br>";
            // echo "<input type='hidden' name='loc' value='data.php'>";
            // echo '</form>';
        }
      echo'</div>';
      echo'</div>';
      echo'</div>';
      echo'</div>';
    ?>
  </body>
</html>
