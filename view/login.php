<!DOCTYPE html>
<html>
    <head>
        <title>Student Data</title>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

    </head> 
    <body>
	<div class="row">
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
						<input class="form-control" type="text" name="username" id="username" placeholder="Masukan Email" autofocus>
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
                	<button type='submit' name='submit' value='data.php' class='btn btn-primary btn-block'>Login</button> 
					<input type='hidden' name='loc' value='data.php'> 
					<br>
					<button type='submit' name='loc' value='register_user.php' class='btn btn-primary btn-block'>Register</button> 
					
			
			</div>
		</form>
	</article>
	</div>
	</aside>
	</div>
</body>


</html>