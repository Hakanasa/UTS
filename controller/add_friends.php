
<?php
 if(isset($_POST['submit'])){
    session_start();
        $user = $_SESSION['username'];
        $username_teman = $_POST['user'];

        $insert_sql = "INSERT INTO friend (username, friend) VALUES ('$user', '$username_teman')";

        mysqli_query($conn,$insert_sql);
        header("location: index.php");
 }

?>
