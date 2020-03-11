<?php 

if(isset($_POST['submit'])){

$securimage = new Securimage();

$username = mysqli_real_escape_string($conn,$_POST['username']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
$password = md5($password);
$captcha = mysqli_real_escape_string($conn,$_POST['captcha_code']);
 
$query = "SELECT * from user where username='$username' and password='$password'";
$result = mysqli_query($conn, $query);  
$cek = mysqli_num_rows($result);


 
if($cek > 0 && $securimage->check($_POST['captcha_code']) == true){
	session_start();
	$_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    echo '<script>
    alert("Welcome");
    location = "index.php";
    </script>'; 
	
}else if($cek==0){
    echo '<script>
    alert("Salah Password / Username");
    location = "index.php";
    </script>'; 
}else{
    echo '<script>
    alert("Salah Recaptcha");
    location = "index.php";
    </script>';
}
}
 
 
?>


