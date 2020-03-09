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
        .bg0 {
          background-image: './assets/BG-0.jpg';
        }
        </style>
    </head>
    <body>
      <div id="fullpage">
    <div class="section active" id="section0">
        <div class="slide" id="slide0" active>
            <div class="intro">
                <h1>WELCOME</h1>
            </div>
        </div>
        <div class="slide" id="slide1">
            <h1>Scroll Down for Sign In</h1>
        </div>
    </div>
    <div class="section" id="section1">
      <div class="row">
        <aside class="col-sm-4">
        </aside>
      <article class="card-body">
      <h1 class="card-title text-center mb-4 mt-1">Sign in</h1>
        <form action="index.php" method="post" onSubmit="return validasi()">
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
              </div>
                <input class="form-control" type="text" name="username" id="username" placeholder="Masukan Username" autofocus>
            </div>
          </div>

          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-key"></i> </span>
              </div>

              <input class="form-control" type="password" name="password" id="password" placeholder="Masukan Password">
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
        sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff'],
        anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', 'lastPage'],
        menu: '#menu',
        lazyLoad: true
    });
</script>

	<!-- <div class="row">
		<aside class="col-sm-4">

		<div class="card">


	</div>
	</aside>

	<aside class="col-sm-4">

	<div class="card">
	<article class="card-body">
	<h4 class="card-title text-center mb-4 mt-1">Sign in</h4>
		<form action="index.php" method="post" onSubmit="return validasi()">
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-user"></i> </span>
					</div>
						<input class="form-control" type="text" name="username" id="username" placeholder="Masukan Username" autofocus>
				</div>
			</div>

			<div class="form-group">
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-key"></i> </span>
					</div>

					<input class="form-control" type="password" name="password" id="password" placeholder="Masukan Password">
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
	</div>
	</aside>
	</div> -->
</body>


</html>
