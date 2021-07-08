<?php
include('connection.php');
$id=$_GET["id"];
mysqli_query($conn,"delete from tbl_2 where id=$id");
?>

<script type="text/javascript">
	window.location="dashboard.php";
</script>