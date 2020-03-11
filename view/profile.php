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

<div class="container pt-3 pb-2">
            <div class="row my-2">
                <div class="col-lg-8 order-lg-2">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a href="" data-target="#post" data-toggle="tab" class="nav-link">Post</a>
                        </li>
                        <li class="nav-item">
                            <a href="" data-target="#edit" data-toggle="tab" class="nav-link">Edit</a>
                        </li>
                    </ul>
                    <div class="tab-content py-4">
                        <div class="tab-pane active" id="profile">
                            <h5 class="mb-3">User Profile</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
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
                                            $row['tanggal_lahir'],
                                            $row['jenis_kelamin'],
                                            $row['username'],
                                            $row['password'],
                                            $row['gambar'],
                                            $row['profile_deskripsi']
                                        )
                                        );
                            ?>

                                    <h6>Nama Depan</h6>
                                    <p>
                                        <?php
                                        foreach($user as $row){
                                          echo $row->getNama_depan();
                                        }
                                        ?>
                                    </p>
                                    <h6>Nama Belakang</h6>
                                    <p>
                                    <?php
                                        foreach($user as $row){
                                          echo $row->getNama_belakang();
                                        }
                                        ?>
                                    </p><h6>Tanggal Lahir</h6>
                                    <p>
                                    <?php
                                        foreach($user as $row){
                                          echo $row->getTanggalLahir();
                                        }
                                        ?>
                                    </p><h6>Jenis Kelamin</h6>
                                    <p>
                                    <?php
                                        foreach($user as $row){
                                          echo $row->getJenisKelamin();
                                        }
                                        ?>
                                    </p>
                                    <h6>Deskripsi</h6>
                                    <p>
                                    <?php
                                        foreach($user as $row){
                                          echo $row->getDeskripsi();
                                        }
                                        ?>
                                    </p>
                                </div>
                            </div>
                            <!--/row-->
                        </div>
                        <div class="tab-pane" id="post">
                            <h5 class="mb-3">User Post</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                <?php
                                session_start();
                                ini_set('error_reporting', 0);
                                ini_set('display_errors', 0);
                                session_start();

                                $user_tln = $_SESSION['username'];
                                $sql_tl = "SELECT * FROM timeline where username ='$user_Sekarang'";
                                $result_tl = $conn -> query($sql_tl);
                                $user_tl=array();

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
                                  echo'<div class="container">';
                                  echo'<div class="row">';
                                  echo'<div class="col-md-2">';
                                  while($row1 = $hasil->fetch_assoc()) {
                                   if($row_tl->getUsernametl() == $row1['username']){
                                     echo"<img src='gambar/".$row1['gambar']."'  width = '100px' height ='100px' class='img img-rounded img-fluid'/>";
                                   }
                                  }
                                  echo'</div>';
                                  echo'<div class="col-md-10">';
                                  echo"<p>";
                                  echo'<a class="float-left" href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>'. $row_tl->getUsernametl() .'</strong></a>';
                                  echo'<div class="clearfix"></div>';
                                  if($row_tl->getGambartl() != ''){
                                   echo "<img class = 'round' width = '100px' height ='100px' src='gambar_tl/".$row_tl->getGambartl()."' >";
                                 }
                                  echo"<p>". $row_tl->getDeskripsitl(). "<p>";
                                  echo"</div>";
                                  echo"</div>";
                                  echo"</div>";
                                }
                            ?>
                                </div>
                            </div>
                            <!--/row-->
                        </div>
                        <div class="tab-pane" id="edit">
                            <form [formGroup]="updateForm" method="post" role="form" action='index.php' enctype="multipart/form-data">
                            <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Username</label>
                                    <div class="col-lg-9">
                                        <input id="username" type="text" class="form-control" name="username" disabled value='<?php
                                        foreach($user as $row){
                                          echo $row->getUsername();
                                        }; ?>'/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Nama Depan</label>
                                    <div class="col-lg-9">
                                        <input id="n_depan" type="text" class="form-control" name="n_depan" value='<?php
                                        foreach($user as $row){
                                          echo $row->getNama_depan();
                                        }; ?>'/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Nama Belakang</label>
                                    <div class="col-lg-9">
                                        <input id="n_belakang" type="text" class="form-control" name="n_belakang"value='<?php
                                        foreach($user as $row){
                                          echo $row->getNama_belakang();
                                        }; ?>'/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Tanggal Lahir</label>
                                    <div class="col-lg-9">
                                        <input id="n_belakang" type="date" class="form-control" name="tanggal_lahir"value='<?php
                                        foreach($user as $row){
                                          echo $row->getTanggalLahir();
                                        }; ?>'/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Jenis Kelamin</label>
                                    <div class="col-lg-9">
                                    <input type="radio" id="male" name="jenis_kelamin" value="Laki-laki">
                                    <label for="male">Male</label><br>
                                    <input type="radio" id="female" name="jenis_kelamin" value="Perempuan">
                                    <label for="female">Female</label><br>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Password</label>
                                    <div class="col-lg-9">
                                        <input id="password" type="password" class="form-control" name="password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Deskripsi</label>
                                    <div class="col-lg-9">
                                        <input id="deskripsi" type="text" class="form-control" name="deskripsi" value ='<?php
                                        foreach($user as $row){
                                          echo $row->getDeskripsi();
                                        }; ?>'/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Foto</label>
                                    <div class="col-lg-9">
                                    <input type="file" name="foto">
                                    <br>
                                    <br>
                                    <input type='hidden' name='do' value='update_user.php'>
                                        <button type="submit" name="submit" value="data.php" class="btn btn-primary">Update</button>
                                    <input type='hidden' name='loc' value='data.php'>
                                        <button type="submit" class="btn btn-secondary" value="data.php">Cancel</button>
                                    </div>
                                </div>
                            </form>
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
