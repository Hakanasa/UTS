
<?php
 if(isset($_POST['submit'])){
    session_start();
    $description = mysqli_real_escape_string($conn,$_POST['description']);
    $time = date('Y-m-d H:i:s');
    $username = $_SESSION['username'];

    $insert_sql = "INSERT INTO timeline (username, post_id, description, time) VALUES ('$username','','$description','$time')";

    mysqli_query($conn,$insert_sql);
}

?>
