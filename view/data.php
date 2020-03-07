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
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
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
      </ul>
    </div>
  </nav>

  <div class="container-fluid text-center">
    <div class="row content">
      <div class="col-sm-2 sidenav bg-dark fixed-top mt-5 pt-3">
        <p><a href="#">Link</a></p>
        <p><a href="#">Link</a></p>
        <p><a href="#">Link</a></p>
      </div>
      <div class="col-sm-2 sidenav bg-dark">
      </div>
      <div class="col-sm-8 text-left">
        <div class="container" style="margin-top:30px">
      <!-- DropDown Start-->
      <p>
    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
      New Post
    </a>
  </p>
  <div class="collapse" id="collapseExample">
    <div class="tab-pane" id="edit">
        <form [formGroup]="updateForm" role="form">
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Nama Lengkap</label>
                <div class="col-lg-9">
                    <input id="nama_lengkap" type="text" class="form-control" formControlName="nama_lengkap" [ngClass]="{ 'is-invalid': submitted && f.nama_lengkap.errors }"/>
                    <div *ngIf="submitted && f.nama_lengkap.errors" class="invalid-feedback">
                        <div *ngIf="f.nama_lengkap.errors.required">Nama Lengkap is required</div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Tanggal Lahir</label>
                <div class="col-lg-9">
                    <input id="tanggal_lahir" type="date" class="form-control" formControlName="tanggal_lahir" [ngClass]="{ 'is-invalid': submitted && f.tanggal_lahir.errors }"/>
                    <div *ngIf="submitted && f.tanggal_lahir.errors" class="invalid-feedback">
                        <div *ngIf="f.tanggal_lahir.errors.required">Tanggal Lahir is required</div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Alamat</label>
                <div class="col-lg-9">
                    <input id="alamat" type="text" class="form-control" formControlName="alamat" [ngClass]="{ 'is-invalid': submitted && f.alamat.errors }"/>
                    <div *ngIf="submitted && f.alamat.errors" class="invalid-feedback">
                        <div *ngIf="f.alamat.errors.required">Alamat is required</div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Foto</label>
                <div class="col-lg-9">
                    <input id="foto" type="text" class="form-control" formControlName="foto" [ngClass]="{ 'is-invalid': submitted && f.foto.errors }"/>
                    <div *ngIf="submitted && f.foto.errors" class="invalid-feedback">
                        <div *ngIf="f.foto.errors.required">Foto is required</div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Password</label>
                <div class="col-lg-9">
                    <input id="password" type="password" class="form-control" formControlName="password" [ngClass]="{ 'is-invalid': submitted && f.password.errors }"/>
                    <div *ngIf="submitted && f.password.errors" class="invalid-feedback">
                        <div *ngIf="f.password.errors.required">Password is required</div>
                    </div>
                </div>
            </div>
            <br/>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label"></label>
                <div class="col-lg-9">
                    <input type="submit" class="btn btn-primary" (click)="update()" value="Save Changes">
                    <input type="reset" class="btn btn-secondary" value="Cancel" routerLink="/home">
                </div>
            </div>
        </form>
    </div>
  </div>
      <!-- DropDown End-->
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
      <div class="col-sm-2 mr-0" style="right: 0px;">
        <div class="well">
          <p>ADS</p>
        </div>
        <div class="well">
          <p>ADS</p>
        </div>
      </div>
    </div>
  </div>

  <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>



</body>
</html>
