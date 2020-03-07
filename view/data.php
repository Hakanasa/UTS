
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.20/datatables.min.css"/>
    
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.20/datatables.min.js"></script>

    <title>Kegiatan5</title>
  </head>

  <body>


   <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">[IF635] Web Programming</a>
    </div>
    <ul class="nav navbar-nav navbar-right pr-1">
      <li class="active"><a href="#">Products</a></li>
    

    </ul>
  </div>
</nav>
<div class="container">
    <form action="index.php" method="post">
		    <div>
            <input type='hidden' name='do' value='logout.php'> 
            <button type='submit' name='loc' value='login.php' class='btn btn-danger' style="float: right">Logout</button> 
		    </div>
	  </form>
    <form action="index.php" method="post">
		    <div>

            <button type='submit' name='loc' value='profile.php' class='btn btn-danger' style="float: right">Profile</button> 
		    </div>
	  </form>
</div>
<br>
<div class="container">
profil
    <form action = "index.php" method="post">
      <textarea class="form-control" rows="4" name="description" placeholder="Apa yang kamu pikirkan?" ></textarea>
      <input type='hidden' name='do' value='add_comment.php'> 
      <button name='submit' value='data.php' class='btn btn-default'>Post</button>  
      <input type='hidden' name='loc' value='data.php'> 
    </form>
    <?php
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
        
   
            echo $row->getNama_depan();
            echo $row->getNama_belakang();
            echo $row->getUsername();
            echo $row->getPassword();
            echo $row->getGambar();
            echo $row->getDeskripsi();

            echo "<img src='gambar/".$row->getGambar()."' >";
                         
                       
        

        }
    ?>
</div>
</body>
</html>





