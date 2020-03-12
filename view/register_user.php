<!doctype html>
<html lang="en">
  <head>
    <title>Registration</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link rel="stylesheet" type="text/css" href="assets/fullpage.css" />
    <link rel="stylesheet" type="text/css" href="assets/examples.css" />

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <style>
    #section2{
      background: linear-gradient(124deg, #ff2400, #e81d1d, #e8b71d, #e3e81d, #1de840, #1ddde8, #2b1de8, #dd00f3, #dd00f3);
      background-size: 400% 400%;
      animation: gradient 15s ease infinite;
    }

    @keyframes gradient {
      0% {
        background-position: 0% 50%;
      }
      50% {
        background-position: 100% 50%;
      }
      100% {
        background-position: 0% 50%;
      }
    }

    </style>
  </head>

  <body id="section2">
    <div class="container" style="pl-sm-0 pr-sm-0">
      <div class="col-sm-4">
      </div>
        <div class="col-sm-12 text-left px-5 py-3 mt-sm-4" style="background-color: rgba(255, 255, 255, 0.5);">
          <h1 class="text-center"><i>Registration</i></h1><br>
          <form action ="index.php" method="post" enctype="multipart/form-data">
            <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label text-dark">Nama Depan</label>
              <div class="col-lg-9">
                  <input type="text" class="form-control" name="n_depan" placeholder="Nama Depan">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label text-dark">Nama Belakang</label>
              <div class="col-lg-9">
                <input type="text" class="form-control" name="n_belakang" placeholder="Nama Belakang">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label text-dark">Tanggal Lahir</label>
              <div class="col-lg-9">
                <input type="date" class="form-control" name="tanggal_lahir">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label text-dark">Jenis Kelamin</label><br>
              <div class="col-lg-9 d-flex align-content-start flex-wrap text-dark">
                <input type="radio" id="male" name="jenis_kelamin" value="Laki-laki">
                <label for="male"> Male</label>
                <input type="radio" id="female" name="jenis_kelamin" value="Perempuan">
                <label for="female"> Female</label>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label text-dark">Username</label>
              <div class="col-lg-9">
                <input type="text" class="form-control" name="username" placeholder="Username" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label text-dark">Password</label>
              <div class="col-lg-9">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label text-dark">Foto Profile</label>
              <div class="col-lg-9">
                <input type="file" class="form-control" name="foto" placeholder="Foto" >
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label text-dark">Deskripsikan Dirimu</label>
              <div class="col-lg-9">
                <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsikan Dirimu" >
              </div>
            </div>
            <div class="d-flex justify-content-end">
            <div class="mr-3">
            <input type='hidden' name='do' value='add_user.php'>
            <button name='submit' value='login.php' class='btn btn-default'>Add User</button>
            </div>
            </form>
            <form action ="index.php" method="post">
            <input type='hidden' name='loc' value='login.php'>
            <button name='loc' value='login.php' class='btn btn-default'>Cancel</button>
            </form>
            </div>
        </div>

    <script type="text/javascript" src="assets/fullpage.js"></script>
    <script type="text/javascript" src="assets/examples.js"></script>
    <script type="text/javascript">
      var myFullpage = new fullpage('#fullpage', {
          anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', 'lastPage'],
          menu: '#menu',
          lazyLoad: true
      });
    </script>

<!--
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
    <label>Tanggal Lahir</label>
    <input type="date" class="form-control" name="tanggal_lahir">
  </div>
  <div class="form-group">
    <label>Jenis Kelamin</label><br>
    <input type="radio" id="male" name="jenis_kelamin" value="Laki-laki">
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="jenis_kelamin" value="Perempuan">
    <label for="female">Female</label><br>
  </div>
  <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" name="username" placeholder="Username">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password">
  </div>
  <div class="form-group">
    <label>Foto Profile</label>
    <input type="file" class="form-control" name="foto" placeholder="Foto" >
  </div>
  <div class="form-group">
    <label>Deskripsikan Dirimu</label>
    <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsikan Dirimu" >
  </div>

  <input type='hidden' name='do' value='add_user.php'>
  <button name='submit' value='login.php' class='btn btn-default'>Add User</button>
  <input type='hidden' name='loc' value='login.php'>
  <button name='loc' value='login.php' class='btn btn-default'>Cancel</button>
</form>
</div>
-->



</body>
</html>
