<!doctype html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <style>
  .back-to-top {
    cursor: pointer;
    position: fixed;
    bottom: 20px;
    right: 20px;
    display:none;
  }
  img {
  border-radius: 50%;
  background: white;
}
.people-nearby .google-maps{
  background: #f8f8f8;
  border-radius: 4px;
  border: 1px solid #f1f2f2;
  padding: 10px;
  margin-bottom: 10px;
}

.people-nearby .google-maps .map{
  height: 100px;
  width: 100%;
  border: none;
}

.people-nearby .nearby-user{
  padding: 10px 0;
  border-top: 1px solid #f1f2f2;
  border-bottom: 1px solid #f1f2f2;
  border-left: 1px solid #f1f2f2;
  margin-bottom: 10px;
}

img.profile-photo-lg{
  height: 80px;
  width: 80px;
  border-radius: 50%;
}

::-webkit-scrollbar {
  width: 12px;
}

::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
  border-radius: 10px;
}

::-webkit-scrollbar-thumb {
  border-radius: 10px;
  -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5);
}
  </style>
  <script>
  $(document).ready(function(){
       $(window).scroll(function () {
              if ($(this).scrollTop() > 50) {
                  $('#back-to-top').fadeIn();
              } else {
                  $('#back-to-top').fadeOut();
              }
          });
          // scroll body to 0px on click
          $('#back-to-top').click(function () {
              $('#back-to-top').tooltip('hide');
              $('body,html').animate({
                  scrollTop: 0
              }, 800);
              return false;
          });

          $('#back-to-top').tooltip('show');

  });
  </script>
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
                <button type='submit' name='loc' value='friend_list.php' class='btn btn-secondary' style="float: right">Friends</button>
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

  <div class="container-fluid text-center bg-secondary">
    <div class="row content">
      <div class="col-sm-2 sidenav fixed-top mt-5 pt-3">
        <?php
            ini_set('error_reporting', 0);
            ini_set('display_errors', 0);
            session_start();
            $user_Sekarang = $_SESSION['username'];
            $sql = "SELECT * FROM user where username ='$user_Sekarang'";
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
            foreach($user as $row){
                echo "<img class = ' mt-3 mb-3 round' width = '150px' height ='150px' src='gambar/".$row->getGambar()."' >";
                echo "<p class='text-center text-white font-weight-bold'>Hai! Apa kabar ".$row->getNama_depan(). "? </p>";
            }

        ?>
      </div>
      <div class="col-sm-2 bg-secondary">
      </div>
      <div class="col-sm-6 text-left bg-light mt-3 mb-3">
        <div class="container" style="margin-top:30px">
      <!-- NewPost Start-->
        <p class="d-flex justify-content-end border-secondary border-bottom pb-3 mb-3">
          <a class="btn btn-dark" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            New Post
          </a>
        </p>
        <div class="collapse" id="collapseExample">
        <h2 class="font-italic">What's in your mind?</h2>
          <form action = "index.php" method="post" enctype="multipart/form-data">
            <div class="pt-3">
              <textarea class="form-control" rows="4" name="description" placeholder="Apa yang kamu pikirkan?" ></textarea>
                  <!-- Foto -->
                  <p class="d-flex justify-content-end border-secondary border-bottom py-2">
                    <a class="text-dark" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
                      Post Foto Baru
                    </a>
                  </p>
                  <div class="collapse border-bottom border-secondary mb-3" id="collapseExample1">
                      <input type="file" class="form-group" name="foto_tl" placeholder="Foto">
                  </div>
                  <!-- Foto -->
          </div>
            <input type='hidden' name='do' value='add_comment.php'>
            <div class="d-flex justify-content-end mb-3 border-bottom border-dark pb-3">
              <button name='submit' value='data.php' class='btn btn-dark'>Post</button>
            </div>
            <input type='hidden' name='loc' value='data.php'>
          </form>
        </div>
      <!-- NewPost End-->
      <form action = "index.php" method="post">
      <table id="example" class="table table-striped table-bordered" style="width:100%">
 <?php
   ini_set('error_reporting', 0);
   ini_set('display_errors', 0);
   session_start();

   $user_tln = $_SESSION['username'];
   $sql_tl = "SELECT * FROM timeline";
   $result_tl = $conn -> query($sql_tl);
   $user_tl=array();


   $user_com = $_SESSION['username'];
   $sql_com = "SELECT * FROM comment";
   $result_com = $conn -> query($sql_com);
   $user_com=array();

   foreach($result_com as $row_com)
   array_push(
       $user_com,
           new Comment(
               $row_com['post_id'],
               $row_com['commenter'],
               $row_com['description'],
               $row_com['time']

           )
   );


   foreach($result_tl as $row_tl)
   array_push(
       $user_tl,
           new Timeline(
               $row_tl['username'],
               $row_tl['post_id'],
               $row_tl['description'],
               $row_tl['time'],
               $row_tl['gambar_tl']

           )
   );
   foreach($user_tl as $row_tl){
     $sql_post = "SELECT * FROM timeline as t join user as u on (u.username = t.username)
                  where u.username = '" . $row_tl->getUsernametl() . "' group by t.username;";
     $hasil = $conn -> query($sql_post);
     echo'<div class="card">';
     echo'<div class="card-body">';
     echo'<div class="row">';
     echo'<div class="col-md-2">';
     while($row1 = $hasil->fetch_assoc()) {
      if($row_tl->getUsernametl() == $row1['username']){
        echo"<img src='gambar/".$row1['gambar']."'  width = '100px' height ='100px' class='img img-rounded img-fluid'/>";
      }
     }
     echo'</div>';
     echo'<div class="col-md-10">';
     echo'<a class="float-left text-uppercase text-dark mb-2" href="#"><strong>'. $row_tl->getUsernametl() .'</strong></a>';
     echo'<div class="clearfix"></div>';
     if($row_tl->getGambartl() != ''){
      echo "<img class = 'round' width = '100px' height ='100px' src='gambar_tl/".$row_tl->getGambartl()."' >";
    }
     echo"<p class='text-dark border-top pt-2'>". $row_tl->getDeskripsitl(). "<p>";
     echo"</div>";
     echo"</div>";

     foreach($user_com as $row_com){
      $sql_com = "SELECT * FROM comment,user
                  where user.username = '" . $row_com->getCommenter() . "' group by comment.commenter;";
      $hasil_com = $conn -> query($sql_com);
       if($row_tl->getPostid() == $row_com->getPostid_com()){
         echo'<div class="card card-inner bg-light mt-3">';
         echo'<div class="card-body">';
         echo'<div class="row">';
         echo'<div class="col-md-2">';
         while($row2 = $hasil_com->fetch_assoc()) {
          if($row_tl->getUsernametl() == $row2['commenter'] && $row_tl->getPostid() == $row_com->getPostid_com()){
            echo"<img src='gambar/".$row2['gambar']."'  width = '100px' height ='100px' class='img img-rounded img-fluid'/>";
          }
         }
         echo'</div>';
         echo'<div class="col-md-10">';
         echo'<p class="text-uppercase mb-0 py-0"><a class="text-dark" href="#"><strong>'.$row_com->getCommenter().'</strong></a></p>' . '<p class="text-lowercase text-secondary">commented on '.$row_com->getTime_com().'</p>';
         echo'<p class="border-top pt-2">'. $row_com->getDeskripsi_com(). "</p>";
         echo"</div>";
         echo"</div>";
         echo"</div>";
         echo"</div>";
       //echo "User <b>".$row_com->getCommenter()."</b> Comment on ".$row_com->getTime_com()."<br>";
       //echo $row_com->getDeskripsi_com()."<br>";
       }
      }
      echo"</div>";
      echo"</div>";
      echo '<form method="post" action="index/php">';
      echo "<div class='form-group py-2'>";
      echo "<input type ='text' class='form-control' name='komentar' placeholder='Komentar' required";
      echo "</div>";
      echo "<input type='hidden' name='do' value='komentar.php'>";
      echo "<input type='hidden' name='Post_id' value='".$row_tl->getPostid()."'>";

      //echo "<input type='hidden' name='loc' value='komentar.php'>";
      echo "<div class='d-flex justify-content-end py-3 mb-3 border-bottom border-secondary'> <button class='btn btn-dark' type='submit' name='submit'>
          Comment
          </button> </div>";
      echo "</form>";
   }
 ?>
</table>
</form>
        </div>
      </div>
      <div class="col-sm-4 sidenav bg-secondary mt-3" style="float : right;">
          <?php
            ini_set('error_reporting', 0);
            ini_set('display_errors', 0);
            session_start();
            $user_Sekarang = $_SESSION['username'];
             $sql = "SELECT user.nama_depan, user.nama_belakang, user.username, user.password, user.gambar, user.profile_deskripsi, user.tanggal_lahir, user.jenis_kelamin FROM user,friend where friend.username ='$user_Sekarang' and user.username = friend.friend group by friend.friend";
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

              echo '<div class="container" style="border : 1px solid #f1f2f2; background-color: #f5f7fa">';
              echo '<div class="row">';
              echo'<div class="col-md-12">';
              echo'<h2 class="border-bottom py-3">Friends</h2>';
              echo'<div class="people-nearby">';
              foreach($user as $row){
                echo '<form method="post" action="index.php">';
                echo'<div class="nearby-user">';
                echo'<div class="row my-2 border mx-2">';
                echo'<div class="col-md-2 col-sm-2 py-2">';
                echo "<img class = 'profile-photo-lg' alt='user' src='gambar/".$row->getGambar()."'>";
                echo'</div>';
                echo'<div class="col-md-7 col-sm-7 py-1">';
                echo'<h5><p class="profile-link text-dark">'.$row->getNama_depan().' '.$row->getNama_belakang().'</p></h5>';
                echo'<p>'.$row->getDeskripsi().'</p>';
                echo'</div>';
                echo'<div class="col-md-3 col-sm-3">';
                echo "<input type='hidden' name='friend_user' value='".$row->getUsername()."'>";
                echo "<input type='hidden' name='loc' value='halaman_teman.php'>";
                echo "<button type='submit' name='submit' class='btn btn-dark mt-4'>Profile</button>";
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
      </div>
    </div>
  </div>
<a id="back-to-top" href="#" class="btn btn-dark btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><strong>^</strong></a>
</div>

</body>
</html>
