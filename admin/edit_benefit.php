<?php
include("connection.php");
$id=$_GET["id"];
$title="";
$description="";
$image="";

$res=mysqli_query($conn,"select * from cms where id=$id");
while ($row=mysqli_fetch_array($res)) {
  $title=$row["title"];
  $description=$row["description"];
  $image=$row["image"];
  $status=$row["status"];

}
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
  <h2>Our Benefits</h2>
  <form action="" method="post" name="slider_form">
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value="<?php echo $title; ?>">
    </div>
    <div class="form-group">
      <label for="description">Description:</label>
      <textarea type="text" class="form-control" id="description" placeholder="Enter description" name="description" rows="10"><?php echo $description; ?></textarea>
    </div>
    <div class="form-group">
      <label for="image">Image path:</label>
      <input type="text" class="form-control" id="image" placeholder="Enter image path" name="image"  value="<?php echo $image; ?>">
    </div>
    <div class="form-group">
      <label for="status">Status:</label>
      <input type="text" class="form-control" id="status" placeholder="Enter 1(Active) or 0(Inactive)" name="status" value="<?php echo $status; ?>">
    </div>
    <button type="submit" class="btn btn-default" name="update">Update</button>
  </form>
</div>
</div>

</body>
<?php
if(isset($_POST["update"])){

  mysqli_query($conn,"update cms set title='$_POST[title]',description='$_POST[description]',image='$_POST[image]' , status='$_POST[status]' where id=$id ;");


  ?>
  <script type="text/javascript">
    window.location="dashboard.php";
  </script>
  <?php
}

?>
</html>
