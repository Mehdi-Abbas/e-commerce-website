<?php
include("connection.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="col-lg-4">
  <h2>Our Products</h2>
  <form action="" method="post" name="slider_form">
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
    </div>
    
    <div class="form-group">
      <label for="price">Price:</label>
      <input type="text" class="form-control" id="price" placeholder="Enter price" name="price">
    </div>
    <div class="form-group">
      <label for="image">Image path:</label>
      <input type="text" class="form-control" id="image" placeholder="Enter image path" name="image">
    </div>
    <div class="form-group">
      <label for="status">Status:</label>
      <input type="text" class="form-control" id="status" placeholder="Enter 1(Active) or 0(Inactive)" name="status">
    </div>
    <button type="submit" class="btn btn-default" name="insert">Insert</button>
  </form>
</div>
</div>

</body>
<?php
if(isset($_POST["insert"])){

  mysqli_query($conn,"INSERT INTO `tbl_3` (`image`, `title`, `status`, `price`) VALUES ( '$_POST[image]', '$_POST[title]', '$_POST[status]', '$_POST[price]')");


  ?>
  <script type="text/javascript">
    window.location="dashboard.php";
  </script>
  <?php
}

?>
</html>
