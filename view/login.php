<!DOCTYPE html>
<html>
    <head>
        <title>Student Data</title>
    		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
        <link rel="stylesheet" type="text/css" href="assets/fullpage.css" />
        <link rel="stylesheet" type="text/css" href="assets/examples.css" />

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
    <body>


      <div id="fullpage">
    <!--<div class="section active" id="section0">
        <div class="slide active" id="slide0" active>
            <div class="intro">
                <h1 class="text-white">WELCOME</h1>
            </div>
        </div>
        <div class="slide" id="slide1">
            <h1 class="text-white">Scroll Down for Sign In</h1>
        </div>
    </div>-->
    <div class="section bg-white" id="section2">
      <div class="row">
        <aside class="col-sm-4">
        </aside>
      <article class="card-body">
      <h1 class="card-title text-center mb-4 mt-1">Sign In</h1>
        <form action="index.php" method="post" onSubmit="return validasi()">
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
              </div>
                <input class="form-control" type="text" name="username" id="username" placeholder="Masukkan Username" autofocus>
            </div>
          </div>
          
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-key"></i> </span>
              </div>

              <input class="form-control" type="password" name="password" id="password" placeholder="Masukkan Password">
            </div>
          </div>

          <div class="form-group">
          <img id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image" />
          </div>

          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-key"></i> </span>
              </div>
              
              <input type="text" class="form-control" name="captcha_code" size="10" maxlength="6" placeholder="Masukkan Kode di atas" />
            </div>
          </div>



                  <div class="form-group">
                  <input type='hidden' name='do' value='check_loginuser.php'>
                  <button type='submit' name='submit' value='data.php' class='btn btn-dark btn-block'>Login</button>
              <input type='hidden' name='loc' value='data.php'>
              <br>
              <button type='submit' name='loc' value='register_user.php' class='btn btn-dark btn-block'>Register</button>
          </div>
        </form>
      </article>
      <div class="col-sm-4"></div>
      </div>
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
</body>


</html>

