<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>

<div class="container pt-3 pb-2">
            <div class="row my-2">
                <div class="col-lg-8 order-lg-2">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Profile</a>
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
                        <div class="tab-pane" id="edit">
                            <form [formGroup]="updateForm" method="post" role="form" action='index.php' enctype="multipart/form-data">
                            <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Username</label>
                                    <div class="col-lg-9">
                                        <input id="username" type="text" class="form-control" name="username" disabled value='
                                        <?php 
                                        foreach($user as $row){
                                          echo $row->getUsername(); 
                                        }; ?>'/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Nama Depan</label>
                                    <div class="col-lg-9">
                                        <input id="n_depan" type="text" class="form-control" name="n_depan" value='
                                        <?php 
                                        foreach($user as $row){
                                          echo $row->getNama_depan(); 
                                        }; ?>'/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Nama Belakang</label>
                                    <div class="col-lg-9">
                                        <input id="n_belakang" type="text" class="form-control" name="n_belakang"value='
                                        <?php
                                        foreach($user as $row){
                                          echo $row->getNama_belakang(); 
                                        }; ?>'/>
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
                                        <input id="deskripsi" type="text" class="form-control" name="deskripsi" value ='
                                        <?php
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