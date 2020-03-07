<?php 

if(isset($_POST['submit'])){


$username = mysqli_real_escape_string($conn,$_POST['username']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
$password = md5($password);
 
$query = "SELECT * from user where username='$username' and password='$password'";
$result = mysqli_query($conn, $query);  
$cek = mysqli_num_rows($result);


 
if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	
}else{
    echo '<script>
    alert("Salah Password / Username");
    location = "index.php";
    </script>'; 
}
}
 
?>


