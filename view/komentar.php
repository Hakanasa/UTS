<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.20/datatables.min.css"/>
 
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.20/datatables.min.js"></script>

    <title>Kegiatan5</title>
  </head>

  <body>
   <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">[IF635] Web Programming</a>
    </div>
    <ul class="nav navbar-nav navbar-right pr-1">
      <li class="active"><a href="#">Products</a></li>
    </ul>
  </div>
</nav>
<div class="col-md-6">
<form action ="index.php" method="post">
  <?php
    
    $id   = $_POST['Post_id'];
    $komentar  = mysqli_query($conn, "select * from comment where post_id='$id'");
    $row        = mysqli_fetch_array($komentar);
  ?>
 
  <div class="form-group">
    <label>Post ID</label>
    <input type="text" class="form-control" name="id" value="<?php echo $row['post_id'];?>" readonly >
  </div>
  <div class="form-group">
    <label>Komentar</label>
    <input type="text" class="form-control" name="komentar" value="<?php echo $row['comment'];?>">
  </div>

  <input type='hidden' name='do' value='komentar.php'> 
  <button name='submit' value='data.php' class='btn btn-default'>Comment</button>  
  <input type='hidden' name='loc' value='komentar.php'> 
  <button name='loc' value='data.php' class='btn btn-default'>Back</button>    
</form>
</div>
<form action = "index.php" method="post">
<table id="example" class="table table-striped table-bordered" style="width:55%">
<?php
   ini_set('error_reporting', 0);
   ini_set('display_errors', 0);
   session_start();
   $id   = $_POST['Post_id'];
   $user_com = $_SESSION['username'];
   $sql_com = "SELECT * FROM comment where post_id ='$id'";
   $result_com = $conn -> query($sql_com);
   $user_com=array();
   foreach($result_com as $row_com)
   array_push(
       $user_com, 
           new Comment(
               $row_com['post_id'],
               $row_com['commenter'],
               $row_com['description'],
               $row_com['time']
       
           )
   );
   foreach($user_com as $row_com){
    echo "<tr>";
    echo "<td> User <b>".$row_com->getCommenter()."</b> Comment on ".$row_com->getTime_com()."</td>";
    echo "<td>".$row_com->getDeskripsi_com()."</td>";
    echo "</tr>";
   }
 ?>
</table>
 </form>


</body>
</html>