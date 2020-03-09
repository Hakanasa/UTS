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
  <body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
    <a class="navbar-brand" href="#">Navbar</a>
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

  <div class="container-fluid text-center">
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
                        $row['username'],
                        $row['password'],
                        $row['gambar'],
                        $row['profile_deskripsi']
                    )
            );
            foreach($user as $row){
                echo "<img class = 'round' width = '100px' height ='100px' src='gambar/".$row->getGambar()."' >";
                echo "<br>Hai apa kabar ".$row->getNama_depan();
            }
        ?>
      </div>
      <div class="col-sm-2">
      </div>
      <div class="col-sm-6 text-left">
        <div class="container" style="margin-top:30px">
      <!-- DropDown Start-->
        <p class="d-flex justify-content-end">
          <a class="btn btn-dark" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            New Post
          </a>
        </p>
        <div class="collapse" id="collapseExample">
        <h2>Whats in your mind?</h2>
          <form action = "index.php" method="post">
            <div class="py-3">
              <textarea class="form-control" rows="4" name="description" placeholder="Apa yang kamu pikirkan?" ></textarea>
          </div>
            <input type='hidden' name='do' value='add_comment.php'>
            <div class="d-flex justify-content-end">
              <button name='submit' value='data.php' class='btn btn-dark'>Post</button>
            </div>
            <input type='hidden' name='loc' value='data.php'>
          </form>
        </div>
      <!-- DropDown End-->
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

   foreach($result_tl as $row_tl)
   array_push(
       $user_tl, 
           new Timeline(
               $row_tl['username'],
               $row_tl['post_id'],
               $row_tl['description'],
               $row_tl['time']
       
           )
   );
   foreach($user_tl as $row_tl){
    echo "<tr>";
    echo "<td>".$row_tl->getDeskripsitl()."</td>";
    echo "<td>"; 
    echo "<div class='col-sm-3'>";                
    echo "<form method='post' action='index.php'>";      
   // echo "<div class='form-group'>";
  //  echo "<input type ='text' class='form-control' name='komentar' placeholder='komentar'";    
   // echo "</div>";
  //  echo "<input type='hidden' name='do' value='komentar.php'>";
    echo "<input type='hidden' name='Post_id' value='".$row_tl->getPostid()."'>";       
     
    echo "<input type='hidden' name='loc' value='komentar.php'>";
    echo "<button type='submit' name='submit'>
        Comment 
        </button>";                
    echo "</form>";                
    echo "</div>";
    echo "</tr>";
     
   }
 
 ?>
</table>
</form>
        </div>
      </div>
    </div>
  </div>
  <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
</div>

</body>
</html>
