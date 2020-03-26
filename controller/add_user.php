<?php
 if(isset($_POST['submit'])){
    $n_depan = mysqli_real_escape_string($conn,$_POST['n_depan']);
    $n_belakang = mysqli_real_escape_string($conn,$_POST['n_belakang']);
    $tanggal_lahir = mysqli_real_escape_string($conn,$_POST['tanggal_lahir']);
    $jenis_kelamin = mysqli_real_escape_string($conn,$_POST['jenis_kelamin']);
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $check_password = strcmp($password,'');
    $password = md5($password);
    $foto = $_FILES['foto']['name'];
    $deskripsi = mysqli_real_escape_string($conn,$_POST['deskripsi']);

    $check_sql = "SELECT * from user where username='$username'";

    $result = mysqli_query($conn,$check_sql);

    $check_username = strcmp($username,'');

    $ket = move_uploaded_file($_FILES['foto']['tmp_name'], "gambar/".$_FILES['foto']['name']);

    if(mysqli_num_rows($result)<1){
        $insert_sql = "INSERT INTO User (nama_depan, nama_belakang, tanggal_lahir, jenis_kelamin, username, password, gambar, profile_deskripsi)
            VALUES ('$n_depan','$n_belakang', '$tanggal_lahir', '$jenis_kelamin','$username','$password','$foto','$deskripsi')";
        mysqli_query($conn,$insert_sql);

        echo '<script>alert("Berhasil Register");</script>';
    }
    else{
      echo '<script>alert("Username Sudah Digunakan Silahkan Coba Lagi");</script>';
    }
}

?>
