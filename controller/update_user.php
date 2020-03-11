<?php
 if(isset($_POST['submit'])){
     session_start();
    $username   = $_SESSION['username'];
    $n_depan = mysqli_real_escape_string($conn,$_POST['n_depan']);
    $n_belakang = mysqli_real_escape_string($conn,$_POST['n_belakang']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $password = md5($password);
    $deskripsi = mysqli_real_escape_string($conn,$_POST['deskripsi']);

    $foto = $_FILES['foto']['name'];

    $ket = move_uploaded_file($_FILES['foto']['tmp_name'], "gambar/".$_FILES['foto']['name']);

    if($ket==1){
        $update_sql = 'UPDATE User SET nama_depan="'.$n_depan.'",
        nama_belakang="'.$n_belakang.'", password="'.$password.'",
        gambar="'.$foto.'", profile_deskripsi="'.$deskripsi.'" WHERE username like "'.$username.'";';
        mysqli_query($conn,$update_sql);
    }else{
        echo '<script>alert("Update Gagal")</script>';
    }
}
?>
