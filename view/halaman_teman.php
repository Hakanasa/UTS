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
<body class="bg-dark">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
    <a class="navbar-brand" href="#">Navbar</a>
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

<div class="container pt-5 pr-5 pb-5 bg-light mt-3 mb-3">
            <div class="row content">
                <div class="col-lg-8 order-lg-2">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Profile</a>
                        </li>
                    </ul>
                    <div class="tab-content py-4  px-4 bg-light">
                        <div class="tab-pane active" id="profile">
                            <h5 class="mb-3">Friend's Profile</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                <?php

                                $friend_user = $_POST['friend_user'];
                                $sql = "SELECT * FROM user where username ='$friend_user'";
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
                            ?>

                                    <?php
                                      foreach($user as $row){
                                        echo '<h6><strong>Nama Depan : </strong>'.$row->getNama_depan().'</h6>';
                                      }
                                    ?>
                                    <p>
                                    <?php
                                        foreach($user as $row){
                                          echo '<h6><strong>Nama Belakang : </strong>'.$row->getNama_belakang().'</h6>';
                                        }
                                        ?>
                                    </p>
                                    <p>
                                    <?php
                                        foreach($user as $row){
                                          echo '<h6><strong>Tanggal Lahir : </strong>'.$row->getTanggalLahir().'</h6>';
                                        }
                                        ?>
                                    </p>
                                    <p>
                                    <?php
                                        foreach($user as $row){
                                          echo '<h6><strong>Jenis Kelamin : </strong>'.$row->getJenisKelamin().'</h6>';
                                        }
                                        ?>
                                    </p>
                                    <p>
                                    <?php
                                        foreach($user as $row){
                                          echo '<h6><strong>Deskripsi : </strong>'.$row->getDeskripsi().'</h6>';
                                        }
                                        ?>
                                    </p>
                                    <p>
                                      <form action = "index.php" method="post">
                                      <input type='hidden' name='loc' value='data.php'>
                                      <button type="submit" class="btn btn-secondary" value="data.php">Back</button>
                                      </form>
                                    </p>
                                </div>
                            </div>
                            <!--/row-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-lg-1 text-center">
                <div class = "mx-auto img-fluid img-circle d-block" alt="avatar">
                <?php
                    foreach($user as $row){
                        echo "<img width = 200 height = 200 src='gambar/".$row->getGambar()."'>";
                    }
                ?>
                </div>
                </div>
            </div>
        </div>
</body>
</html>
