<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.20/datatables.min.css"/>
 
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.20/datatables.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>

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
<div class="col-md-6">
<form action ="index.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label>Nama Depan</label>
    <input type="text" class="form-control" name="n_depan" placeholder="Nama Depan">
  </div>
  <div class="form-group">
    <label>Nama Belakang</label>
    <input type="text" class="form-control" name="n_belakang" placeholder="Nama Belakang">
  </div>
  <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" name="username" placeholder="Username">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="text" class="form-control" name="password" placeholder="Password" >
  </div>
  <div class="form-group">
    <label>Foto</label>
    <input type="file" class="form-control" name="foto" placeholder="Foto" >
  </div>
  <div class="form-group">
    <label>Deskripsikan Dirimu</label>
    <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsikan Dirimu" >
  </div>
  <div class="form-group">
    <label>Recaptcha</label>
    <div class="g-recaptcha" data-sitekey="6LcPN98UAAAAAC1kE0zirTWp1hohOCOurWOCSzP4" style="margin-bottom: 10px;"></div>
  </div>
  <input type='hidden' name='do' value='add_user.php'> 
  <button name='submit' value='login.php' class='btn btn-default'>Add User</button>  
  <input type='hidden' name='loc' value='login.php'> 
  <button name='loc' value='login.php' class='btn btn-default'>Cancel</button>    
</form>
</div>



</body>
</html>