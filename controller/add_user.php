
<?php
 if(isset($_POST['submit'])){
    $n_depan = mysqli_real_escape_string($conn,$_POST['n_depan']);
    $n_belakang = mysqli_real_escape_string($conn,$_POST['n_belakang']);
    $tanggal_lahir = mysqli_real_escape_string($conn,$_POST['tanggal_lahir']);
    $jenis_kelamin = mysqli_real_escape_string($conn,$_POST['jenis_kelamin']);
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $password = md5($password);
    $foto = $_FILES['foto']['name'];
    $deskripsi = mysqli_real_escape_string($conn,$_POST['deskripsi']);

    if(isset($_POST['g-recaptcha-response'])) $captcha=$_POST['g-recaptcha-response'];
    if(!$captcha){
        echo "<h2>Please check the captcha form</h2>";
    }

    $str = "https://www.google.com/recaptcha/api/siteverify?secret=6LcPN98UAAAAAH7vW4CVYJUyjV2yPIOgS2Y4O7eY"."&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR'];
    $response =file_get_contents($str);
    $response_arr= (array) json_decode($response);

    $check_sql = "SELECT * from user where username='$username'";


    $ket = move_uploaded_file($_FILES['foto']['tmp_name'], "gambar/".$_FILES['foto']['name']);


    if($ket==1&&$response_arr["success"]==true&&$check_sql==0){
        $insert_sql = "INSERT INTO User (nama_depan, nama_belakang, tanggal_lahir, jenis_kelamin, username, password, gambar, profile_deskripsi) 
            VALUES ('$n_depan','$n_belakang', '$tanggal_lahir', '$jenis_kelamin','$username','$password','$foto','$deskripsi')";

        mysqli_query($conn,$insert_sql);
    }elseif($check_sql==1){
        echo "Username sudah terpakai";
    }
}

?>
