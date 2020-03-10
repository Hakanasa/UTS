
<?php
 if(isset($_POST['submit'])){
    session_start();

        $description = mysqli_real_escape_string($conn,$_POST['description']);
        $time = date('Y-m-d H:i:s');
        $username = $_SESSION['username'];
        $foto_tl = $_FILES['foto_tl']['name'];

        move_uploaded_file($_FILES['foto_tl']['tmp_name'], "gambar_tl/".$_FILES['foto_tl']['name']);

        $insert_sql = "INSERT INTO timeline (username, post_id, description, time, gambar_tl) 
                        VALUES ('$username','','$description','$time','$foto_tl')";

        mysqli_query($conn,$insert_sql);
        header("location: index.php");
 }

?>
