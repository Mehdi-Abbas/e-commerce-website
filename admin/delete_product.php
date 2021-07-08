<?php
include('connection.php');
$id=$_GET["id"];
mysqli_query($conn,"delete from tbl_3 where id=$id");
?>

<script type="text/javascript">
	window.location="dashboard.php";
</script>