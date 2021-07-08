<?php
  include('connection.php');
 

  if (count($_POST)>0){
    $txtTitle = $_POST['title'];
    $txtDescription = $_POST['description'];
    $txtImage = $_POST['image'];
    $txtDate = $_POST['date'];

    $sql = "INSERT INTO `tbl_4` (`image`, `title`, `description`,`date`) VALUES ( '$txtImage', '$txtTitle', '$txtDescription','$txtDate');";
    $rs = mysqli_query($conn, $sql);

    if($rs)
    {
      echo "<script><alert>Contact Records Inserted</alert></script>";
      header('Location: dashboard.php');
      
    }
    else{
      echo "<script><alert>Contact Records Not Inserted</alert></script>";
    }
  }

?>
<!DOCTYPE html>
<html>
<header>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</header>
<body>
  <div class="container">
    <?php

include('connection.php');
$sql5 = "SELECT * FROM tbl_4";
//mysql_select_db("tbl_5", $conn);
$result_5 = mysqli_query($conn, $sql5);

 

//$result = mysql_query("SELECT * FROM Form");


echo "

<form><a href='insert_blog.php'><button type='button' class='btn btn-default' style='margin-bottom:20px;''>Insert New Record</button></a></form>

<table class='table table-striped'>

<tr>
<th>Id</th>
<th>Image</th>
<th>Status</th>

<th>Title</th>

<th>Date</th>
<th>Edit</th>
<th>Delete</th>


</tr>";
if (mysqli_num_rows($result_5) > 0) 
    {
      while ($row = mysqli_fetch_assoc($result_5)){
        echo "<tr>";

          echo "<td>" . $row['id'] . "</td>";

          echo "<td>" . " <img src='".$row['image']."' style='width:100px;'> " . "</td>";
          
          if($row['status']==1){
            echo "<td>" . "Active" . "</td>";
          }else{
            echo "<td>" . "Inactive" . "</td>";
          }

         

          echo "<td>" . $row['title'] . "</td>";

          
          echo "<td>" . $row['date'] . "</td>";
          echo "<td>"; ?> <a href="edit_blog.php?id=<?php echo $row['id'];  ?>"><button type="button" class="btn btn-success">Edit</button></a>  <?php echo "</td>";

          echo "<td>"; ?> <a href="delete_blog.php?id=<?php echo $row['id'];  ?>"><button type="button" class="btn btn-danger">Delete</button></a> <?php echo "</td>";

           

          
          
          

          echo "</tr>";

         } 
        echo "</table>";
         
          
          

      
      
     } 
  ?>



</div>

</body>
</html>
   
 
   

   
